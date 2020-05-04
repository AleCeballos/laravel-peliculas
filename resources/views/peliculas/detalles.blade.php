@extends('peliculas.main')

@section('content')




<!-- ////////////////////////////////// -->
<div class="container text-center pt-3 pb-3 " style="margin:auto; display:flex;">
<div class="card bg-dark text-white" style="width: 38rem; height: 50rem; margin:auto;">
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-body "id="cardSombra">
  <h5 class="card-title"><strong>{{$detallesPelicula->title}}</strong></h5>
    <hr>


    @if(isset($detallesPelicula->image))
    <div>
    <img  style="width:10rem; heigth:9rem;" src="/storage/{{$detallesPelicula->image}}" alt="">
    </div>
    @endif
    <hr>
    <p class="card-text">Awards: {{$detallesPelicula->awards}}</p>
    <hr>
    <p class="card-text">Rating: {{$detallesPelicula->rating}}</p>
    <hr>
    <p class="card-text">Release_date: {{$detallesPelicula->release_date}}</p>
    <hr>
    @if($detallesPelicula->length)
    <p class="card-text">Lenght: {{$detallesPelicula->length}}</p>
    @endif
    <hr>
    @if($detallesPelicula->genero)
    <p class="card-text">Genre: {{$detallesPelicula->genero->name}}</p>
    @endif
    <hr>
    <p><strong>Actores que trabajaron en la pelicula</strong></p>
   <ul>
    @foreach($detallesPelicula->actores as $actor)
    <li>
    {{$actor->getNombreCompleto()}}
    </li>
    @endforeach
    </ul>

  
</div>






@endsection