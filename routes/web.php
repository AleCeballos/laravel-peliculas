<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// MUESTRA PELICULA
Route::get('/home-peliculas', 'PeliculasController@mostrarPeliculas');



//DETALLE
Route::get('/detalles-peliculas/{id}', 'PeliculasController@mostrarDetalles');

//TITULO
Route::get('/titulos-peliculas', 'PeliculasController@mostrarTitulos');

//BUSCA
Route::get('/buscar-peliculas/{search?}', 'PeliculasController@buscarTitulos');

//FORM AGREGAR
Route::get('/agregar-peliculas', 'PeliculasController@agregarGenero');

Route::post('/agregar-peliculas', 'PeliculasController@agregarPelicula');

//FORM EDITAR
Route::get('/listadoEdicion-peliculas', 'PeliculasController@listadoEdicion');

Route::get('/editar-peliculas/{id}', 'PeliculasController@editarPersistencia');

Route::post('/editar-peliculas', 'PeliculasController@editPeliculas');

//FORM ELIMINAR
Route::post('/eliminar-peliculas', 'PeliculasController@eliminarPelicula');


