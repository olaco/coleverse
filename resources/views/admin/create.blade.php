@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Project</h2>
    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label>Category</label>
            <input type="text" name="category" class="form-control">
        </div>

        <div class="mb-3">
            <label>Thumbnail</label>
            <input type="file" name="thumbnail" class="form-control">
        </div>

        <div class="mb-3">
            <label>Project URL</label>
            <input type="url" name="url" class="form-control" placeholder="https://example.com" required>
        </div>

        <button type="submit" class="btn btn-primary">Save Project</button>
    </form>
</div>
@endsection
