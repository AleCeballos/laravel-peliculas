<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    //
    
    //public $table= "actors";
    //public $primaryKey ="id";
    //public $timestamps = false;
    public $guarded =[];


     public function getNombreCompleto(){

         return $this->first_name . " " . $this->last_name; 
     }

//RELACION DE MUCHOS ACTORES A MUCHAS PELICULAS
    public function Peliculas(){
        return $this->belongsToMany("App\Pelicula", "actor_movie","actor_id","movie_id"); 

    }
}
