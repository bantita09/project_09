<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="{{url('/')}}">Hint Coffee Roaster</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('/house-blend')}}">House Blend</a></li>
          <!-- <li><a class="nav-link scrollto" href="{{url('/single-origin')}}">Single Orgin</a></li> -->
          <li><a class="nav-link scrollto" href="{{url('/beverage-menu')}}">Beverage Menu</a></li>
          <li><a class="nav-link scrollto" href="{{url('/contact')}}">Contact</a></li>

          @if (Route::has('login'))
                    @auth
                        <li><a class="nav-link scrollto" href="{{ url('/admin/home') }}" >Admin</a></li>
          @else

                      <li><a class="nav-link scrollto" href="{{ route('login') }}" >Log in</a></li>

              @if (Route::has('register'))

                        <li><a class="nav-link scrollto" href="{{ route('register') }}" >Register</a></li>

              @endif

                    @endauth
            @endif

        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#" class="book-a-table-btn scrollto d-none d-lg-flex">Cart</a>

    </div>
  </header>
