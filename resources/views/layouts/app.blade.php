<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Thoaks Bass Online') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <!-- New links -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/site/fonts/icomoon/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('css/site/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site/owl.theme.default.min.css') }}">
 <!--<link rel="stylesheet" href="css/owl.theme.default.min.css"> -->

    <link rel="stylesheet" href="{{ asset('css/site/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/site/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('css/site/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/site/sweetalert.css') }}">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="overflow-x: hidden;">
  <div id="app">
  {{-- <div id="overlayer"></div> --}}
    <div class="site-wrap"  id="home-section">
     <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
     <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-md-3 col-xl-2  d-block">
           <!--  <h1 class="mb-0 site-logo"><a href="index.php" class="text-black h2 mb-0">MT<span class="text-primary"></span> </a></h1> -->
           <a href="{{ url('/') }}"><img src={{asset('css/site/logoimage/logo.png')}}  width="150" height="50" hr></a>
          </div>

          <div class="col-12 col-md-9 col-xl-10 main-menu">
            <nav class="site-navigation position-relative text-left" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block ml-0 pl-0">
                 <li class="has-children">
                  <a href="{{route('series.index')}}" class="nav-link">Courses</a>
                  <ul class="dropdown arrow-top">
                    <li><a href="#our-team-section" class="nav-link">Electric Bass Style</a></li>
                    <li><a href="#our-team-section" class="nav-link">African Bass Style</a></li>
                    <li><a href="#our-team-section" class="nav-link">Jazz Bass Style</a></li>
                  </ul>
                </li>
                 <li class="has-children">
                  <a href="#about-section" class="nav-link">Instructors</a>
                  <ul class="dropdown arrow-top">
                    <li onclick="location.href='#';"><a href="#" target="" class="nav-link"><span class="text-primary">Marvin Thoaks</span></a></li>
                    <li onclick="location.href='#';"><a href="#our-team-section" class="nav-link">Mark Amoo</a></li>
                    <li onclick="location.href='#';"><a href="#" class="nav-link">Kwabena SA</a></li>
                  </ul>
                </li>

                 <li onclick="location.href='#';"><a href="packages.php" class="nav-link">Plans & Pricing</a></li>
                 <li class="has-children">
                  <a href="#about-section" class="nav-link">Resorces</a>
                  <ul class="dropdown arrow-top">
                    <li onclick="location.href='#';"><a href="#" class="nav-link">About Us</a></li>
                    <li onclick="location.href='#';"><a href="#" class="nav-link">FAQ</a></li>
                    <li onclick="location.href='#';"><a href="#" class="nav-link">Terms & Conditions</a></li>
                  </ul>
                </li>
                 <li onclick="location.href='#contact-section';"><a href="#contact-section" class="nav-link">Contact</a></li>
                 {{-- <li><i class="fa fa-shopping-cart" aria-hidden="true"></i></li> --}}

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }} <i class="fa fa-lock"></i></a>
                                     {{-- <li onclick="location.href='login/index.html';"><a href="login/index.html" class="nav-link" >Log In <i class="fa fa-lock"></i></a></li> --}}
                                </li>
                            @endif


                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </ul>

            </nav>
          </div>
          <div class="col-6 col-md-9 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

     </header>


        <main class="py-4">
            @yield('content')
        </main>
  </div>

  </div>



{{-- <script src="{{ asset('js/sitejs/vendor/aos/aos.js') }}"></script> --}}


  <script src="{{ asset('js/sitejs/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/sitejs/jquery-ui.js') }}"></script>
  <script src="{{ asset('js/sitejs/popper.min.js') }}"></script>
  <script src="{{ asset('js/sitejs/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/sitejs/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/sitejs/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('js/sitejs/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('js/sitejs/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/sitejs/aos.js') }}"></script>
  <script src="{{ asset('js/sitejs/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('js/sitejs/jquery.sticky.js') }}"></script>
  <script src="{{ asset('js/sitejs/all_scripts.js')}}"></script>


  <script src="{{ asset('js/sitejs/main.js') }}"></script>

  <script src="{{ asset('js/sitejs/sweetalert.min.js') }}"></script>

<script>
    let success = "{{session('success')}}";

    if(success)
    {
        swal("Success", "Payment Successful", "success")
    }

    let error = "{{session('error')}}";

    if(error)
    {
        swal("Oops", "Payment was not successful", "error")
    }
</script>


</body>
</html>
