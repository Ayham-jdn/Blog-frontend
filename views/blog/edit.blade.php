<!-- resources/views/blog/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Edit Post</h2>

    <form action="{{ route('blog.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" rows="5" class="form-control" required>{{ old('description', $post->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image (optional)</label>
            <input type="file" name="imagep" class="form-control">
            @if($post->imagep)
                <img src="{{ asset('images/' . $post->imagep) }}" class="img-thumbnail mt-2" width="200">
            @endif
        </div>

        <button type="submit" class="btn btn-success">Update Post</button>
        <a href="{{ route('blog.show', $post->id) }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
