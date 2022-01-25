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
    return view('plantillas');
});

//Routas de paginas

//paginas de inicio
Route::view('/','paginas.blog');
//paginas de administradores
Route::view('/administradores','paginas.administradores');
//paginas de articulos
Route::view('/articulos','paginas.articulos');
//paginas de opiniones
Route::view('/opiniones','paginas.opiniones');
//paginas de categorias
Route::view('/categorias','paginas.categorias');
//paginas de categorias
Route::view('/banner','paginas.banner');
//paginas de categorias
Route::view('/anuncios','paginas.anuncios');


//Routas Get Blog
//Route::get('/','BlogController@TraerBlog');
//Route::get('administradores','AdministradoresController@TraerAdministradores');
//Route::get('categorias','CategoriasController@TraerCategorias');
//Route::get('articulos','ArticulosController@TraerArticulos');
//Route::get('anuncios','AnunciosController@TraerAnuncios');
//Route::get('banner','BannerController@TraerBanner');
//Route::get('opiniones','OpinionesController@TraerOpiniones');

//Rutas de recursos para usar todos los recurso del controlador
Route::Resource('/','BlogController'); 
Route::Resource('blog','BlogController'); 
Route::resource('administradores','AdministradoresController');
Route::resource('categorias','CategoriasController');
Route::resource('articulos','ArticulosController');
Route::resource('anuncios','AnunciosController');
Route::resource('banner','BannerController');
Route::resource('opiniones','OpinionesController');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
