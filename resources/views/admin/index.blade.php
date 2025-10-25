@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Admin Dashboard</h2>

    {{-- Success message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Chart --}}
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Projects Overview</h5>
            <canvas id="projectsChart"></canvas>
        </div>
    </div>

    {{-- Project Table --}}
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>All Projects</span>
            <a href="{{ route('admin.create') }}" class="btn btn-primary btn-sm">+ Add Project</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Thumbnail</th>
                        <th>Title</th>
                        <th>URL</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($projects as $project)
                        <tr>
                            <td>
                                @if($project->thumbnail)
                                    <img src="{{ asset('storage/'.$project->thumbnail) }}" width="80" class="rounded">
                                @endif
                            </td>
                            <td>{{ $project->title }}</td>
                            <td><a href="{{ $project->url }}" target="_blank">{{ $project->url }}</a></td>
                            <td>{{ Str::limit($project->description, 50) }}</td>
                            <td>
                                <a href="{{ route('admin.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('admin.destroy', $project->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Delete this project?')" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No projects found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Chart.js --}}
{{-- Chart --}}
<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">Projects Created Per Month</h5>
        <canvas id="projectsChart"></canvas>
    </div>
</div>

{{-- Chart.js --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('projectsChart');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($months),
            datasets: [{
                label: 'Projects Created',
                data: @json($counts),
                borderColor: '#0d6efd',
                backgroundColor: 'rgba(13, 110, 253, 0.3)',
                fill: true,
                tension: 0.3
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: { stepSize: 1 }
                }
            }
        }
    });
</script>


@endsection
