

<!-- INCLUDE DE HEADER -->
@include('peliculas.header')

<div class="container text-center pt-3 pb-3">
<div class="card" style="width: 38rem; height: 50rem; margin:auto;">
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-body ">
    <h5 class="card-title"><strong>{{$detallesPelicula->title}}</strong></h5>
    <hr>
    <p class="card-text">Awards: {{$detallesPelicula->awards}}</p>
    <hr>
    <p class="card-text">Rating: {{$detallesPelicula->rating}}</p>
    <hr>
    <p class="card-text">Release_date: {{$detallesPelicula->release_date}}</p>
    <hr>
    <p class="card-text">Lenght: {{$detallesPelicula->length}}</p>
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

    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</div>




<!-- INCLUDE DE FOOTER -->
@include('peliculas.footer') 