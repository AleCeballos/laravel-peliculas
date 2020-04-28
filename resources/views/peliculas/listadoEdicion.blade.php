


<!-- INCLUDE DE HEADER -->
@include('peliculas.header')

@if(Session::has('flash_message'))
<div class="alert alert-success" role="alert">
{{Session::get('flash_message')}}
</div>
@endif




<div class="container text-center pt-3 pb-3">

<div class="card text-right mt-5 mb-2">
  <h5 class="card-header text-light bg-dark"><a class="btn btn-success" href="{{url('/agregar-peliculas')}}" ><strong>Agregar una pelicula</strong></a></h5>
  
</div>

<table class="table table-bordered table-bordered bg-light">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Título</th>
      <th scope="col">Género</th>
      <th scope="col">Editar</th>
      <th scope="col">eliminar</th>
      </tr>
  </thead>
  <tbody>
    
    @foreach($titulosPelicula as $pelicula)
      <tr>
      <th scope="row">{{$pelicula->id}}</th>
      <td><a href="{{url('/detalles-peliculas/'.$pelicula->id)}}">{{$pelicula->title}}</a></td>
      <td>@if($pelicula->genero)
    <p class="card-text">{{$pelicula->genero->name}}</p>
      @endif</td>
      
    <td><a href="{{url('/editar-peliculas/'.$pelicula->id)}}" class="btn btn-warning">Editar</a></td>
    <td>
    <form action="/eliminar-peliculas" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$pelicula->id}}">
    <input type="submit"  class="btn btn-danger" value="Eliminar">

 <!-- href="{{url('/eliminar-peliculas/'.$pelicula->id)}}" -->
    </form>
    </td>
      </tr>
   @endforeach
  </tbody>
</table>

{{$titulosPelicula->links()}}


</div>



<!-- INCLUDE DE FOOTER -->
@include('peliculas.footer') 