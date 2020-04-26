<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    public $table= "genres";
    //public $primaryKey ="id";
    //public $timestamps = false;
    public $guarded =[];


    //UN GENERO TIENE MUCHAS PELICULAS
    public function genero(){
        return $this->hasMany("App\Pelicula","genre_id");
  
  
      }
}
