@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Project</h2>
    <form action="{{ route('admin.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $project->title }}" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" required>{{ $project->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Category</label>
            <input type="text" name="category" class="form-control" value="{{ $project->category }}">
        </div>

        <div class="mb-3">
            <label>Thumbnail</label><br>
            @if($project->thumbnail)
                <img src="{{ asset('storage/' . $project->thumbnail) }}" width="100" class="mb-2"><br>
            @endif
            <input type="file" name="thumbnail" class="form-control">
        </div>

        <div class="mb-3">
            <label>Project URL</label>
            <input type="url" name="url" class="form-control" value="{{ $project->url }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Project</button>
    </form>
</div>
@endsection
