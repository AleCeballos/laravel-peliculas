@extends('peliculas.main')

@section('content')


<div class="container col-lg-8  pt-3" style="heigth:30rem;">
@if(Session::has('message-error'))
<div class="alert alert-danger text-center" role="alert"><strong style="font-size:30px;">
{{Session::get('message-error')}}
</strong>
</div>
@endif
<div class="row">
<div class="col-lg-6" >


@forelse($peliculas as $pelicula)
<div class="card mb-3 bg-dark text-white" style="max-width: 540px; " id="cardSombra">
<div class="row no-gutters">
<div class="col-md-4">
<img style="height:12rem; width:9rem;" src="/storage/{{$pelicula->image}}" class="card-img-top" alt="...">
</div>
<div class="col-md-8">
<div class="card-body">
<h5 class="card-title" id="titleCardHome"><a id="titleSubrrallado"style="text-decoration:none; color:white" href="{{url('/detalles-peliculas/'.$pelicula->id)}}"><strong>{{$pelicula->title}}</a></strong></h5>
<div id="textoDescriptivo">
<p class="card-text" >Para mas detalles acerca de la pelicula toque sobre el título. Las peliculas pueden descargarse gratis desde su reproductor.</p>
</div>
<p class="card-text"><small class="text-muted">Subido {{\FormatTime::LongTimeFilter($pelicula->created_at)}}</small></p>
</div>
</div>
</div>
</div>
@empty
<p>no hay peliculas</p>

@endforelse
<div class="container text center">
{{$peliculas->links()}}




</div> 
</div>



<div class="col-lg-6">

@forelse($cualquierpel as $pelicula)
<div class="card mb-3 bg-dark text-white" style="max-width: 540px; " id="cardSombra">
<div class="row no-gutters">
<div class="col-md-4">
<img style="height:12rem; width:9rem;" src="/storage/{{$pelicula->image}}" class="card-img-top" alt="imagenHome">
</div>
<div class="col-md-8">
<div class="card-body">
<h5 class="card-title"><a style="text-decoration:none; color:white" id="titleSubrrallado"href="{{url('/detalles-peliculas/'.$pelicula->id)}}" ><strong>{{$pelicula->title}}</a></strong></h5>
<div id="textoDescriptivo">
<p class="card-text">Para mas detalles acerca de la pelicula toque sobre el título. Las peliculas pueden descargarse gratis desde su reproductor.</p>
</div>
<p class="card-text"><small class="text-muted" id="ago">Subido {{\FormatTime::LongTimeFilter($pelicula->created_at)}}</small></p>
</div>
</div>
</div>
</div>
@empty
<p>no hay peliculas</p>

@endforelse
<div class="container text center">
{{$cualquierpel->links()}}




</div>





<!--fin de col 4  -->
</div>

<!--fin de col 4  -->
</div>

<!--fin de class row-->
</div>

@endsection
