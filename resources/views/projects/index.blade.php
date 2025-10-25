@extends('layouts.app')

@section('content')
<div class="container">
    <h2>TinkersHub</h2>
    <div class="row">
        @foreach($projects as $project)
            <div class="col-md-4 mb-3">
                <div class="card">
                    @if($project->thumbnail)
                        <img src="{{ asset('storage/' . $project->thumbnail) }}" class="card-img-top" alt="Thumbnail">
                    @endif
                    <div class="card-body">
                        <h5>{{ $project->title }}</h5>
                        <p>{{ Str::limit($project->description, 100) }}</p>
                        <a href="{{ $project->url }}" target="_blank" class="btn btn-outline-primary">View Project</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
