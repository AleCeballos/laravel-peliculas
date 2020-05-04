@extends('peliculas.main')

@section('content')

@if(Session::has('flash_message'))
<div class="alert alert-success" role="alert">
{{Session::get('flash_message')}}
</div>
@endif

<div class="text-center col-lg-3 pt-2" style="margin:auto;" >
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
<div class="container col-md-3 border text-center rounded text-white bg-dark" style="margin-top:0%;" >




<h1 class="p-3">Agregar pelicula</h1>
<form action="/agregar-peliculas" method="post" enctype="multipart/form-data">
@csrf
<div>
<label for="title">Título</label>
<input class="form-control" type="text" name="title">
</div>
<!-- Rating-->
<div>
<label for="rating">Rating</label>
<input class="form-control" type="text" name="rating">
</div>
<!-- Awards-->
<div>
<label for="awards">Premios</label>
<input class="form-control" type="text" name="awards">
</div>
<!-- Release date-->
<div>
<label for="release_date">Fecha de lanzamiento</label>
<input class="form-control" type="text" name="release_date">
</div>
<!-- Length-->
<div>
<label for="length">Largo</label>
<input class="form-control" type="text" name="length">
</div>
<!-- image-->
<div>
<label for="image">Imagen</label>
<input class="form-control" type="file" name="image">
</div>

<!-- genreId -->
<div class="form-group">
<label for="genre_id">Generos</label>
  <select  type="text" class="form-control" name="genre_id"  >
   @forelse ($generos as $genero)
   <option >
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
</div>
@endsection