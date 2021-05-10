<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Coffee - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('theme/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('theme/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('theme/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('theme/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('theme/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('theme/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/pagination.css') }}">
    @livewireStyles
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Coffee<small>Blend</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="menu.html" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="/shop">Shop</a>
                <a class="dropdown-item" href="product-single.html">Single Product</a>
                <a class="dropdown-item" href="/cart">Cart</a>
                <a class="dropdown-item" href="/checkout">Checkout</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                @if(Route::has('login'))
                  @auth
                      @if(Auth::user()->utype === 'ADM')
                      <a class="dropdown-item" href="">({{Auth::user()->name}}) </a>
                      <a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                      <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Logout</a>
                      <form id="logoutForm" method="POST" action="{{route('logout')}}">
                        @csrf
                      </from>
                      @else
                      <a class="dropdown-item" href="">({{Auth::user()->name}}) </a>
                      <a class="dropdown-item" href="{{route('user.dashboard')}}">Dashboard</a>
                      <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Logout</a>
                      <form id="logoutForm" method="POST" action="{{route('logout')}}">
                        @csrf
                      </from>
                      @endif
                  @else
                      <a class="dropdown-item" href="{{route('login')}}">Login</a>
                      <a class="dropdown-item" href="{{route('register')}}">Register</a>
                  @endif
                @endif
              </div>
            </li>

	          <li class="nav-item cart"><a href="cart.html" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    {{$slot}}



    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Cooked</a></li>
                <li><a href="#" class="py-2 d-block">Deliver</a></li>
                <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
                <li><a href="#" class="py-2 d-block">Mixed</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('theme/js/jquery.min.js') }}"></script>
  <script src="{{ asset('theme/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('theme/js/popper.min.js') }}"></script>
  <script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('theme/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('theme/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('theme/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('theme/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('theme/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('theme/js/aos.js')}}"></script>
  <script src="{{ asset('theme/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('theme/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('theme/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('theme/js/scrollax.min.js') }}"></script>
  <script src="{{ asset('theme/js/google-map.js') }}"></script>
  <script src="{{ asset('theme/js/main.js')}}"></script>
  @livewireScripts

  </body>
</html>
