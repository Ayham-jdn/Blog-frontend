<footer class=" text-center text-lg-start mt-5  shadow">
  <div class="container p-4">
    <div class="row">
      <div class="col-lg-6 col-md-12 mb-4">
        <h5 class="text-uppercase">Innova Blog</h5>
        <p>
          Simple and elegant footer using Bootstrap. You can add links, info, or anything here.
        </p>
      </div>

      <div class="col-lg-3 col-6 mb-4">
        <h5 class="text-uppercase">Links</h5>
        <ul class="list-unstyled mb-0">
          <li><a href="/" >Home</a></li>
          <li><a href="/blog" >Blog</a></li>
          @if( !!!Auth::check())
          <li><a href="/login" >Login</a></li>
          <li><a href="/register" >Register</a></li>
          @else
          <li><a href="#" >how to create posts</a></li>

          <li><a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
          </a></li>
          @endif
        </ul>
      </div>

      <div class="col-lg-3 col-6 mb-4">
        <h5 class="text-uppercase">Latest Posts</h5>
        <ul class="list-unstyled mb-0">
          <li><a href="#" >Who we are </a></li>
          <li><a href="#" >The Second last post </a></li>
          <li><a href="#" >Your Suvvess with us</a></li>
          <li><a href="#" >LinkedIn</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="bg-dark text-center p-3  text-white">
    <p>© {{ date('Y') }} All Rights Reserved innova blug.
      <br>
      Development by <a  target="_blank" href="#" 
      style="text-decoration: none;  color:rgb(0, 200, 255) ; text-transform: uppercase;">inn<span style="color: rgb(151, 56, 239);">o</span>va c<span style="color: rgb(151, 56, 239);">o</span>de<span style="color: rgb(151, 56, 239);">.</span></a>
    </p>
  </div>
</foote>
