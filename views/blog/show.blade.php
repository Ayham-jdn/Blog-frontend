<!-- resources/views/blog/show.blade.php -->

@extends('layouts.app') {{-- تأكد أنو عندك ملف layout مناسب --}}

@section('content')


<div class="alert alert-secondary" role="alert">
    {{session()->get('message')}}
</div>

<div class="container py-5">
    <div class="card shadow-sm">
        <img src="{{ asset('images/' . $post->imagep) }}"  style="max-width: 800px;" class="card-img-top img-fluid" alt="{{ $post->title }}">
        <div class="card-body">
            <h3 class="card-title">{{ $post->title }}</h3>
            By: <span><i>{{ $post->user->name }}</i></span>
            On <span><i>{{ date('m-d-y',$post->upsated_at ) }}</i></span>
            <p class="card-text">{{ $post->description }}</p>

            @if(Auth::user() && Auth::user()->id == $post->user_id)
            <div class="d-flex justify-content-around mt-4">
                <a href="{{ route('blog.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                

                    
                    <form action="{{ route('blog.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                

            </div>
            @endif
        </div>
    </div>
</div>
@endsection
