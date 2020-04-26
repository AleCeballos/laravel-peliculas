<!-- INCLUDE DE HEADER -->
@include('peliculas.header')
<div class="container mt-5 text-center " >
<div class="col-lg-5 " style="margin-left:25%;">
          @forelse($resultado as $pelicula)
               <div class="card">
                 <h5 class="card-header"><a href="{{url('/detalles-peliculas/'.$pelicula->id)}}"> {{$pelicula->title}}</a></h5>
                   
               </div>
                <br>
           @empty
           <p>no hay peliculas</p>
           @endforelse
     </div>
     </div>




<!-- INCLUDE DE FOOTER -->
@include('peliculas.footer') 