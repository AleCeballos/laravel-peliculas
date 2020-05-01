@extends('peliculas.main')

@section('content')
<div class="container ">
          <div class="row">
<div class="col-lg-6">
          @forelse($peliculas as $pelicula)
               <div class="card">
                 <h3 class="card-header"><a href="{{url('/detalles-peliculas/'.$pelicula->id)}}"><strong>{{$pelicula->title}}</a></strong></h3>
                   <div class="card-body">
                       <h5 class="card-title">Awards: {{$pelicula->awards}}</h5>
                          <p class="card-text">Rating: {{$pelicula->rating}}</p>
                          
                   </div>
               </div>
                <br>
           @empty
           <p>no hay peliculas</p>

             @endforelse
             <div class="container text center">
             {{$peliculas->links()}}

 </div>
</div>
          

<!-- ////////////////////// -->
<div class="col-lg-6">
          @forelse($cualquierpel as $pelicula)
               <div class="card">
                 <h3 class="card-header"> <a href="{{url('/detalles-peliculas/'.$pelicula->id)}}"><strong>{{$pelicula->title}}</strong></a></h3>
                   <div class="card-body">
                       <h5 class="card-title">Awards: {{$pelicula->awards}}</h5>
                          <p class="card-text">Rating: {{$pelicula->rating}}</p>
                         
                   </div>
               </div>
                <br>
           @empty
           <p>no hay peliculas</p>

             @endforelse
             <div class="container text center">
             {{$cualquierpel->links()}}

 </div>

</div>
          




<!--fin de col 4  -->
</div>

<!--fin de col 4  -->
</div>

<!--fin de class row-->
</div>

@endsection
