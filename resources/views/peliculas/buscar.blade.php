@extends('peliculas.main')

@section('content')

<div style="margin:auto">
 <h3>Resultados de la busqueda</h3>
</div>

<div class="container mt-5 text-center " >

<div class="col-lg-5 " style="margin-left:25%;">
          @forelse($resultado as $pelicula)
               <div class="card">
                 <h5 class="card-header"><a href="{{url('/detalles-peliculas/'.$pelicula->id)}}"> {{$pelicula->title}}</a></h5>
                   
               </div>
                <br>
           @empty
           
           <div class="alert alert-danger" role="alert">
           no hay peliculas
          </div>
           
           @endforelse
     </div>
     </div>


@endsection