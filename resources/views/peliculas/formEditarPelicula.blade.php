@extends('peliculas.main')

@section('content')

<div class="text-center col-lg-3 pt-2" style="margin:auto;">
@if(count($errors)>0)
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)

<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
</div>
<div class="container col-lg-4 border text-center rounded text-white bg-dark" style="margin-top:0%;" >
<h1 class="p-3">Editar pelicula</h1>
<div class="row">

<div class="col-lg-7 p-1 " style="margin:auto;" >

<img style="heigth:10rem; width:10rem;  padding-top:6%;" src="/storage/{{$PeliculaPersistencia->image}}" alt="">
</div>

<div class="col-lg-6 " style="margin:auto;">

<form action="/editar-peliculas" method="post" enctype="multipart/form-data">
@csrf

<input type="hidden" name="id" value="{{$PeliculaPersistencia->id}}">
<div>
<!-- title -->

<label for="title">Título</label>
<input class="form-control" type="text" name="title" value="{{$PeliculaPersistencia->title}}">
</div>
<!-- rating -->
<div>
<label for="rating">Rating</label>
<input class="form-control" type="text" name="rating" value="{{$PeliculaPersistencia->rating}}">
</div>
<!-- awards -->
<div>
<label for="awards">Premios</label>
<input class="form-control" type="text" name="awards" value="{{$PeliculaPersistencia->awards}}">
</div>
<!-- release_date -->

<div>
<label for="release_date">Fecha de lanzamiento</label>
<input class="form-control" type="text" name="release_date" value="{{$PeliculaPersistencia->release_date}}">
</div>

<!-- length -->

<div>
<label for="length">Largo</label>
<input class="form-control" type="text" name="length" value="{{$PeliculaPersistencia->length}}">
</div>

 <!-- image -->
<div>
<label for="image">Imagen</label>
<input class="form-control" type="file" name="image">
</div> 


<!-- genre_id -->
<div class="form-group">
<label for="genre_id">Generos</label>
  <select  type="text" class="form-control" name="genre_id" >
    
    @forelse ($generos as $genero)
    <option>
  {{$genero->name}}
   </option>
     @empty
  no hay generos
  @endforelse
  <select>
 </div>


 <div class="form-group">
  <button type="submit" class="btn btn-success">Submit</button>
  </div>
</form>

<!-- fin de class col-lg-6 -->
</div>
<!-- fin de class row -->
</div>
<!-- fin de class container -->
</div>

@endsection