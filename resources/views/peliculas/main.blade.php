

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script> 
     <script src="{{ asset('js/validar.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- quito el nav -->
<!-- HEADER -->
<header >
<nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm " >
            <div class="container " style="box-shadow: -8px 11px 15px 0px rgba(1,1,1,1.66);">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <a class="navbar-brand text-white ml-5" href="{{url('/home-peliculas')}}">Peliculas</a> 
                <a class="navbar-brand text-white" href="{{url('/titulos-peliculas')}}">Títulos</a>
             
                <a class="navbar-brand text-white pl-5" href="{{url('/listadoEdicion-peliculas')}}">ABM peliculas</a>
              
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto ">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                    

                            <div class="mr-5">
                              <form class="form-inline my-2 my-lg-0" method="get" action="/buscar-peliculas">
                          
                               <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                              </form>

                        </div>
                            <li class="nav-item dropdown ">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                          
                                <div class="dropdown-menu dropdown-menu-right text-white bg-dark" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-white bg-dark" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

</header>

        <main class="py-4">
            
        
        @yield('content')

         
        </main>

 

  <!--  FOOTER -->
                             
<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4 bg-dark text-white" style=" margin-top:40rem;">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Footer links -->
  <div class="row text-center text-md-left mt-3 pb-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Movies list</h6>
      <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
        consectetur
        adipisicing elit.</p>
    </div>
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
      <p>
        <a href="#!">MDBootstrap</a>
      </p>
      <p>
        <a href="#!">MDWordPress</a>
      </p>
      <p>
        <a href="#!">BrandFlow</a>
      </p>
      <p>
        <a href="#!">Bootstrap Angular</a>
      </p>
    </div>
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
      <p>
        <a href="#!">Your Account</a>
      </p>
      <p>
        <a href="#!">Become an Affiliate</a>
      </p>
      <p>
        <a href="#!">Shipping Rates</a>
      </p>
      <p>
        <a href="#!">Help</a>
      </p>
    </div>

    <!-- Grid column -->
    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Contacto</h6>
      <p>
        <i class="fas fa-home mr-3"></i> Buenos aires </p>
      <p>
        <i class="fas fa-envelope mr-3"></i> alejandro.voynich@gmail.com</p>
      <p>
        <i class="fas fa-phone mr-3"></i> +541123651528 </p>
      <p>
        <i class="fas fa-print mr-3"></i> +541123651529</p>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Footer links -->

  <hr class="w-100 ">

  <!-- Grid row -->
  <div class="row d-flex align-items-center ">

    <!-- Grid column -->
    <div class="col-md-12 col-lg-12 ">
   
      <!--Copyright-->
      <p class="text-center text-md-center">© 2020 Copyright:
        <!-- <a href=""> contacto -->
          <strong> Alejandro Ceballos</strong>
        </a>
      </p>

    </div>
    <!-- Grid column -->



</footer>
<!-- Footer -->


</div>
</div>
    
</body>
</html>
