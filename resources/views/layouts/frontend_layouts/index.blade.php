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
                <li class="active"><a href="{{ route('home')}}" class="nav-link">Home</a></li>
                <li><a href="{{ route('matches')}}" class="nav-link">Matches</a></li>
                <li><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                <li><a href="{{ route('players')}}" class="nav-link">Players</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                @if(Auth::user())
                <li><a href="{{ route('logout') }}" class="nav-link">logout</a></li>
                @else         
                <li><a href="{{ route('admin_dashboard') }}" class="nav-link">Login</a></li>     
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
              <h3>News</h3>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Tickets</h3>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Matches</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Alone Sit Myin Stadium(every 2 week at monday)</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Social</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Telegram</a></li>
                <li><a href="#">youtube</a></li>
              </ul>
            </div>
          </div>

        </div>

        <div class="row text-center">
          <div class="col-md-12">
            <div class=" pt-5">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="icon-heart"
                  aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">github.com/ahrkar864</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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