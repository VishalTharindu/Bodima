<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>navibar</title>

      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
          
          <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
          <link rel="stylesheet" href="{{asset('css/animate.css')}}">

          <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
          <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
          <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

          <link rel="stylesheet" href="{{asset('css/aos.css')}}">

          <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

          <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
          <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
          <link rel="stylesheet" href="{{asset('css/style.css')}}">
          <link rel="stylesheet" href="{{asset('css/fontawesome/fontawesome/css/all.css')}}">
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target shadow p-1 mb-5 bg-white rounded" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html">Bo<span>dima</span></a>
          <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="fa fa-bars"></span>Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
              <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
              <li class="nav-item"><a href="#services-section" class="nav-link"><span>Bodims</span></a></li>
              <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Boders</span></a></li>
              <li class="nav-item"><a href="#about-section" class="nav-link"><span>Add bodim</span></a></li>
              <li class="nav-item"><a href="#testimony-section" class="nav-link"><span>Request bodim</span></a></li>
              <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Filtaring</span></a></li>
              <li class="nav-item">
                  <ul class="navbar-nav nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item float-right">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item float-right">
                                <a class="nav-link is-pilled-right" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    <li class="nav-item dropdown is-pulled-right">
                      <div class="btn-group is-pulled-right">
                        <a class="btn  dropdown-toggle is-pulled-right" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false class=" href="#" role="button">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                          {{-- <button type="button" class="btn  dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                          </button> --}}
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="http://">Profile</a>
                            <a class="dropdown-item" href="http://">Account Setting</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                          </div>
                        </div>
                      </li>
                    @endguest
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>
  
          <script src="{{asset('js/jquery.min.js')}}"></script>
          <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
          <script src="{{asset('js/popper.min.js')}}"></script>
          <script src="{{asset('js/bootstrap.min.js')}}"></script>
          <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
          <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
          <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
          <script src="{{asset('js/owl.carousel.min.js')}}"></script>
          <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
          <script src="{{asset('js/aos.js')}}"></script>
          <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
          <script src="{{asset('js/scrollax.min.js')}}"></script>
          <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script>
          <script src="{{asset('js/google-map.js')}}"></script>
  
          <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>