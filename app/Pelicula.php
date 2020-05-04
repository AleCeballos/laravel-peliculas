<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Pelicula extends Model
{
    //

    public $table= "movies";
    //public $primaryKey ="id";
    //public $timestamps = false;
    public $guarded =[];

 //UNA PELICULA TIENE UN GENERO 
    public function genero(){
      return $this->belongsTo("App\Genero","genre_id");
}


public function actores(){
  return $this->belongsToMany("App\Actor", "actor_movie","movie_id","actor_id"); 

}



}
