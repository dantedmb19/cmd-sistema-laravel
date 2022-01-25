<?php

namespace App\Http\Controllers;
use App\Anuncios;
use Illuminate\Http\Request;
use App\Administradores;
use App\Blog;

class AnunciosController extends Controller
{
    public function Index(){

    	$anuncios = Anuncios::all();
    	$administradores = Administradores::all();
    	$blog = Blog::all();

    	return view("paginas.anuncios",array("anuncios"=>$anuncios,"blog"=>$blog,"administradores"=>$administradores));
    }
}
