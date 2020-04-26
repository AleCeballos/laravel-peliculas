<!-- INCLUDE DE HEADER -->
@include('peliculas.header')

<div class="container text-center pt-3 pb-3">

<table class="table table-bordered table-bordered bg-light">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Título</th>
      <th scope="col">Género</th>
      </tr>
  </thead>
  <tbody>
    
    @foreach($titulosPelicula as $pelicula)
      <tr>
      <th scope="row">{{$pelicula->id}}</th>
      <td>{{$pelicula->title}}</td>
      <td>@if($pelicula->genero)
    <p class="card-text">{{$pelicula->genero->name}}</p>
    @endif</td>
      </tr>
   @endforeach
  </tbody>
</table>

{{$titulosPelicula->links()}}


</div>


<!-- INCLUDE DE FOOTER -->
@include('peliculas.footer') 