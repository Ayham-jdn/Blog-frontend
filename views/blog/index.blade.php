@extends('layouts.app')

@section('content')


    @if(session()->has('message'))
    <div class="alert alert-secondary" role="alert">
        {{session()->get('message')}}
    </div>
    @endif

    <div class=" container   p-5 text-center pt-5 " >
        <h1 class="fw-bold" >All posts</h1>
    </div>
    @if(Auth::check())
    <div class=" align-items-center px-5 ">
        <a href="/blog/create" class="btn btn-primary ">Add new post</a> 

    </div>
    @endif


    @foreach($posts as $post)
    <div class="row align-items-center p-5">
        <div class="col-md-6   " >
            <img class=" img-fluid"  src="/images/{{$post->imagep}}" alt="">
        </div>
        <div class="col-md-6  py-3 ">
            <h2 class="fw-bold fs-2 ">
                {{$post->title}}
            </h2>
            
            <span>
                By: <span><i>{{ $post->user->name }}</i></span>
                On <span><i>{{ $post->updated_at->format('Y-m-d') }}</i></span>
                <p class="fs-5  " >{{$post->description}}</p>
                <a href="/blog/{{$post->id}}" class="btn btn-dark">Read More</a> 

            </span>
        </div>
    </div>
    @endforeach





@endsection