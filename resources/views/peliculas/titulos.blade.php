
@extends('peliculas.main')

@section('content')
<div class="container col-lg-3 text-center pt-1 pb-1">

@foreach($titulosPelicula as $pelicula)
<div class="card mb-3 bg-dark text-white" style="max-width: 540px;" id="cardSombra">
<div class="row no-gutters">
<div class="col-md-4">
<img src="/storage/{{$pelicula->image}}" class="card-img" alt="...">
</div>
<div class="col-md-8">
<div class="card-body">
<h5 class="card-title "><a id="titleSubrrallado" href="{{url('/detalles-peliculas/'.$pelicula->id)}}" style="color:#fff; text-decoration:none">{{$pelicula->title}}</a></h5>
@if($pelicula->genero)
<p class="card-text">{{$pelicula->genero->name}}</p>
@endif
<p class="card-text"><small class="text-muted">{{\FormatTime::LongTimeFilter($pelicula->created_at)}}</small></p>
</div>
</div>
</div>
</div>
@endforeach


{{$titulosPelicula->links()}}




<!-- fin de class container -->
</div>


@endsection