<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Genero;
use Session;
use App\User;


class PeliculasController extends Controller
{


   public function __construct(){
     
      $this->middleware('auth');
      $this->middleware('admin',['only'=>'listadoEdicion']);
     
     }



    //MOSTRAR PELICULAS IZQUIERDA

    public function mostrarPeliculas (){

      $cualquierpel = Pelicula::orderBy('title', 'ASC')->paginate(5);   
      $peliculas = Pelicula::orderBy('created_at', 'DESC')->paginate(5);

   //dd($cualquierpel);
  
    $vac = compact("peliculas", "cualquierpel");
 
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


}


//llena el option de generos
public function agregarGenero (){
   
   $generos = Genero::all();

   $vac = compact("generos");

   return view('peliculas.formAgregarPelicula', $vac);

  

}

//llena el option de generos
public function agregarPelicula (Request $req){
   

   $this->validate($req, [

      'title' => 'required','string', 'max:255',
      'rating'=> 'required', 'min:3',
      'awards' => 'required',
      'release_date'=> 'required',
      'length' => 'required',
      
   ]);



   $generos = Genero::all();


   $peliculanueva = new Pelicula();
   $peliculanueva->title = $req["title"];
   $peliculanueva->rating = $req["rating"];
   $peliculanueva->awards = $req["awards"];
   $peliculanueva->release_date = $req["release_date"];
   $peliculanueva->length = $req["length"];
   foreach($generos as $genero){
      if($req["genre_id"]==$genero->name){
      $peliculanueva->genre_id=$genero->id;
      }
      }

      $peliculanueva->save();
      Session::flash('flash_message', 'se agregó pelicula correctamente');


   return view('peliculas.formAgregarPelicula');
}


public function  listadoEdicion (){

   

   $titulosPelicula = Pelicula::orderBy('title', 'ASC')->paginate(5);

    $vac = compact("titulosPelicula");

return view('peliculas.listadoEdicion', $vac);
  
}

public function editarPersistencia($id){
   
   $generos = Genero::all();
   $generoId = Genero::findOrFail($id);

   $PeliculaPersistencia = Pelicula::findOrFail($id);
        
   $vac = compact("PeliculaPersistencia","generos","generoId");

   return view('peliculas.formEditarPelicula', $vac);
}


public function editPeliculas (Request $req){
   
   $id= $req["id"];

   $this->validate($req, [

      'title' => 'required','string', 'max:255',
      'rating'=> 'required', 'min:3',
      'awards' => 'required',
      'release_date'=> 'required',
      'length' => 'required',
      
   ]);
   
   $generos = Genero::all();

   $pelicula = Pelicula::findOrFail($id);
   $pelicula->title = $req["title"];
   $pelicula->rating = $req["rating"];
   $pelicula->awards = $req["awards"];
   $pelicula->release_date = $req["release_date"];
   $pelicula->length = $req["length"];
   foreach($generos as $genero){
      if($req["genre_id"]==$genero->name){
      $pelicula->genre_id=$genero->id;
      }
      }

      $pelicula->update();
      Session::flash('flash_message', 'se actualizó pelicula correctamente');
   return redirect('/listadoEdicion-peliculas');
}




public function eliminarPelicula (Request $req){

   $id= $req["id"];
   $pelicula = Pelicula::findOrFail($id);

  $pelicula->delete();

  Session::flash('flash_message', 'se eliminó pelicula correctamente');
  return redirect('/listadoEdicion-peliculas');
}
}
