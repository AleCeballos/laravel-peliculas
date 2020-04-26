<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

class PeliculasController extends Controller
{
    //MOSTRAR PELICULAS

    public function mostrarPeliculas (){

        
   $peliculas = Pelicula::orderBy('created_at', 'DESC')->paginate(5);

   $cualquierpel = Pelicula::orderBy('title', 'ASC')->paginate(5);

   //dd($cualquierpel);
  
    $vac = compact("peliculas","cualquierpel");
 
     return view('peliculas.main', $vac);
    }


 //MOSTRAR DETALLES
    public function mostrarDetalles ($id){

        $detallesPelicula = Pelicula::findOrFail($id);

        $vac = compact("detallesPelicula");

 return view('peliculas.detalles', $vac);
    }


    
 //MOSTRAR DETALLES
 public function mostrarTitulos (){

    $titulosPelicula = Pelicula::orderBy('title', 'ASC')->paginate(5);

    $vac = compact("titulosPelicula");

return view('peliculas.titulos', $vac);
}

//BUSCAR TITULO
public function buscarTitulos (Request $request){

if($request){
$query= trim($request->get('search'));

$resultado = Pelicula::where('title','LIKE','%'.$query .'%')->orderBy('title','asc')->get();

$vac = compact("resultado");

return view('peliculas.buscar', $vac);
}

//     $search = '%'.$request->input('search').'%';
//     $resultado = Pelicula::where('title','LIKE', $search)->orderBy('title','desc')->get();

//     $vac = compact("resultado");

  

// return view('peliculas.buscar', $vac);
}


}
