<!DOCTYPE html>
<html lang="en">

<head>
  <title>DYS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('frontend/fonts/icomoon/style.css') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboard/assets/images/dys.jpg') }}">
  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap/bootstrap.css') }}">
  <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{asset('frontend/css/jquery.fancybox.min.css') }}">

  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datepicker.css') }}">

  <link rel="stylesheet" href="{{asset('frontend/fonts/flaticon/font/flaticon.css') }}">

  <link rel="stylesheet" href="{{asset('frontend/css/aos.css') }}">

  <link rel="stylesheet" href="{{asset('frontend/css/style.css') }}">

  <style>
    .login, .register {
      margin-top: 200px;
    }
    .player-img {
        width: 200px;
        height: 250px;
    }
  </style>

</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html">
              <img class="site-logo-img" src="{{ asset('dashboard/assets/images/dys.jpg') }}" alt="Logo">
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li @if(Route::currentRouteName() == 'home') class="active" @endif>
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li @if(Route::currentRouteName() == 'about') class="active" @endif>
                  <a href="{{ route('about') }}" class="nav-link">About</a>
                </li>
                <li @if(Route::currentRouteName() == 'matches') class="active" @endif>
                    <a href="{{ route('matches') }}" class="nav-link">Matches</a>
                </li>
                <li @if(Route::currentRouteName() == 'blog') class="active" @endif>
                    <a href="{{ route('blogs') }}" class="nav-link">Blogs</a>
                </li>
                <li @if(Route::currentRouteName() == 'players') class="active" @endif>
                    <a href="{{ route('players') }}" class="nav-link">Players</a>
                </li>
                <li @if(Route::currentRouteName() == 'contact') class="active" @endif>
                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                </li>
                @if(Auth::user())
                <li>             
                      <a href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
              </li>
                @else
                    <li @if(Route::currentRouteName() == 'admin_dashboard') class="active" @endif>
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>

                    <li @if(Route::currentRouteName() == 'admin_dashboard') class="active" @endif>
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>
                @endif
            </ul>
            
            </nav>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>

    </header>

    @yield('content')

    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3></h3>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3></h3>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3></h3>
              <ul class="list-unstyled links">
                <li></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Social</h3>
              <ul class="list-unstyled links">
                <li><a href="{{ $all_profile_club_information->facebook_link }}">Favebook</a></li>
                <li><a href="{{ $all_profile_club_information->telegram_link }}">Telegram</a></li>
                <li><a href="{{ $all_profile_club_information->youtube_link }}">Youtube</a></li>
              </ul>
            </div>
          </div>

        </div>

        <div class="row text-center">
          <div class="col-md-12">
            <div class=" pt-5">
              <p>
                {{ $all_profile_club_information->copyright }}
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="icon-heart"
                  aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">github.com/ahrkar864</a>    
              </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div>
  <!-- .site-wrap -->

  <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('frontend/js/aos.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.mb.YTPlayer.min.js') }}"></script>


  <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>