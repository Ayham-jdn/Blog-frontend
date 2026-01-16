@extends('layouts.app')
@section('content')




  <div class="container mt-5">

      <div class="card-header bg-primary text-white rounded ">
        <h3 class="p-2 fs-4 ">Create New Post</h3>
      </div>
      <div class="card-body">
        <form action="/blog" method="POST" enctype="multipart/form-data">
          <!-- Laravel CSRF Token -->
          @csrf

          <!-- Title -->
          <div class="mb-3">
            <label for="title" class="form-label">Post Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
          </div>

          <!-- Description -->
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
          </div>

          <!-- Image -->
          <div class="mb-3">
            <label for="imagep" class="form-label">Post Image</label>
            <input type="file" name="imagep" id="imagep" class="form-control" accept="image/*" required>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="btn btn-success">Post</button>
        </form>
      </div>
    
  </div>
@endsection