

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- quito el nav -->
<!-- INCLUDE DE HEADER -->
        @include('peliculas.header')

        <main class="py-4">
            
        
        @yield('content')

          <div class="container ">
          <div class="row">
<div class="col-lg-5">
          @forelse($peliculas as $pelicula)
               <div class="card">
                 <h3 class="card-header"><a href="{{url('/detalles-peliculas/'.$pelicula->id)}}"><strong>{{$pelicula->title}}</a></strong></h3>
                   <div class="card-body">
                       <h5 class="card-title">Awards: {{$pelicula->awards}}</h5>
                          <p class="card-text">Rating: {{$pelicula->rating}}</p>
                          
                   </div>
               </div>
                <br>
           @empty
           <p>no hay peliculas</p>

             @endforelse
             <div class="container text center">
             {{$peliculas->links()}}

 </div>
</div>
          

<!-- ////////////////////// -->
<div class="col-lg-5">
          @forelse($cualquierpel as $pelicula)
               <div class="card">
                 <h3 class="card-header"> <a href="{{url('/detalles-peliculas/'.$pelicula->id)}}"><strong>{{$pelicula->title}}</strong></a></h3>
                   <div class="card-body">
                       <h5 class="card-title">Awards: {{$pelicula->awards}}</h5>
                          <p class="card-text">Rating: {{$pelicula->rating}}</p>
                         
                   </div>
               </div>
                <br>
           @empty
           <p>no hay peliculas</p>

             @endforelse
             <div class="container text center">
             {{$cualquierpel->links()}}

 </div>

</div>
          





<!--fin de col 4  -->
</div>


<!--fin de col 4  -->
</div>

<!--fin de class row-->
</div>
        </main>

        <hr>

  <!-- INCLUDE DE FOOTER -->
                              @include('peliculas.footer') 
</div>
    
</body>
</html>
