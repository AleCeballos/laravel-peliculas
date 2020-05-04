

@extends('peliculas.main')

@section('content')

@if(Session::has('flash_message'))
<div class="alert alert-success" role="alert">
{{Session::get('flash_message')}}
</div>
@endif




<div class="container text-center pt-3 pb-3">

<div class="card text-right mt-1 mb-2" >
<h5 class="card-header text-light bg-dark" ><a class="btn btn-success" href="{{url('/agregar-peliculas')}}" ><strong>Agregar una pelicula</strong></a></h5>

</div>

<!-- ////////////////////////// -->
@foreach($titulosPelicula as $pelicula)
<div class="card mb-3 bg-dark text-white " style="max-width: 540px; margin:auto; " id="cardSombra">
<div class="row no-gutters">
<div class="col-md-4">
<img src="/storage/{{$pelicula->image}}" class="card-img" alt="...">
</div>
<div class="col-md-8">
<div class="card-body">

<h5 class="card-title"><a href="{{url('/detalles-peliculas/'.$pelicula->id)}}" id="titleSubrrallado" style="color:#fff; text-decoration:none">{{$pelicula->title}}</a></h5>

@if($pelicula->genero)
<p class="card-text">{{$pelicula->genero->name}}</p>
@endif
<p class="card-text"><small class="text-muted">{{\FormatTime::LongTimeFilter($pelicula->created_at)}}</small></p>
<div class="container">
<div class="row">
<div class="col">
<a href="{{url('/editar-peliculas/'.$pelicula->id)}}" class="btn btn-warning">Editar</a>
</div>
<div class="col">
<form action="/eliminar-peliculas" method="post">
@csrf
<input type="hidden" name="id" value="{{$pelicula->id}}">
<input type="submit"  class="btn btn-danger" value="Eliminar " onClick=" return confirm('estas seguro?')">

<!-- href="{{url('/eliminar-peliculas/'.$pelicula->id)}}" -->
</form>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

@endforeach

<div style="margin-left:32%">
{{$titulosPelicula->links()}}
</div>



</div>

@endsection