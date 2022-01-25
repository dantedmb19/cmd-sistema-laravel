<?php

namespace App\Http\Controllers;
use App\Articulos;
use Illuminate\Http\Request;
use App\Administradores;
use App\Blog;

class ArticulosController extends Controller
{
     public function Index(){

    	$articulos = Articulos::all();
    	$administradores = Administradores::all();
    	$blog = Blog::all();

    	return view("paginas.articulos",array("articulos"=>$articulos,"blog"=>$blog,"administradores"=>$administradores));
    }
}
