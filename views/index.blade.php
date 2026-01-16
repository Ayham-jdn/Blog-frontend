@extends('layouts.app')
@section('content')

<style>
    .background-section {
      background-image: url('{{asset('image/login-hero.jpg')}}');
      background-attachment: fixed;
      background-size: cover;
      background-position: center;
      height: 100vh; 

    }
  </style>

<!-- Hero  -->
<div class="background-section d-flex align-items-center justify-content-center flex-column ">
  <h1 class="display-4 text-white text-uppercase fw-bold mb-4">Welcome to My Blog</h1>
  <a href="/blog" class="btn btn-light text-dark px-4 py-2">Start reading</a>
</div>




<!-- How to be an expert  -->
<div class=" bg-light py-5 px-5">
    <div class="continer row align-items-center  " >
        
        <div class="col-md-6"  >
            <img src="https://picsum.photos/id/1067/960/620" alt="" class="rounded img-fluid">
        </div>
        <div class="col-md-6  py-5"  >
            <h2 class="fw-bold fs-1 text-dark text-uppercase ">How to be an expert in 2025</h2>
            <p class="text-dark">you can find a list of all programming languages here.</p>
            <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis veniam alias assumenda ex, cumque autem quis modi hic harum quia commodi rerum ab esse qui rem consectetur, similique obcaecati quidem.</p>
            <a href="/" class="btn btn-dark">Read More</a>
        </div>
    </div>
</div>



<div class=" text-center  bg-dark py-5 ">
    <h2 class="p-3 fw-bold text-white ">Blog Categories</h2>
    <!-- Swiper -->
    <div class=" container">
        <div class=" d-flex align-items-center flex-row  flex-column flex-md-row ">
            <div class=" fs-4  mx-auto py-2 ">
                <a class="text-decoration-none text-white " href="/">UX Desighn thinking</a>
            </div>
            <div class=" fs-4 mx-auto py-2">
                <a class="text-decoration-none text-white " href="/">Programming languages</a>
            </div>
            <div class=" fs-4 mx-auto py-2">
                <a class="text-decoration-none text-white " href="/">Front Developer</a>
            </div>
            <div class=" fs-4 mx-auto py-2 ">
                <a class="text-decoration-none text-white" href="/">Backend learing</a>
            </div>
            <div class=" fs-4 mx-auto py-2">
                <a class="text-decoration-none text-white " href="/">responsive Web</a>
            </div>
        </div>
    </div>
</div>


<!-- Recent posts  -->
<div class=" bg-light  p-5    ">

    <div class="  my-5 bg-dark continer col-md-12 d-flex row align-items-center" >
    
        <div class="col-md-6  p-5 col-sm-12"  >
            <h2 class="fw-bold fs-1  text-uppercase text-white">welcome to my blog in 2025</h2>
            <p class="text-white">This is a quick example of a blog post using Bootstrap components. You can customize it easily.</p>
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis veniam alias assumenda ex, cumque autem quis modi hic harum quia commodi rerum ab esse qui rem consectetur, similique obcaecati quidem.</p>
            <a href="/" class="btn btn-light">Read More</a>
        </div>
            <!-- Image -->
            <div class=" d-flex col-md-6 col-sm- ">
                <img src="https://picsum.photos/id/944/600/450" class=" rounded-start " alt="Post Image">
            </div>


    </div>
</div>







@endsection