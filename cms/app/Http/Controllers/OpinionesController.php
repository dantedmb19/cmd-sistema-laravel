<?php

namespace App\Http\Controllers;

use App\Opiniones;
use App\Blog;
use App\Administradores;
use Illuminate\Http\Request;

class OpinionesController extends Controller
{
    public function Index(){

    	$opiniones = Opiniones::all();
    	$blog = Blog::all();
    	$administradores = Administradores::all();

    	return view("paginas.opiniones",array("opiniones"=>$opiniones,"blog"=>$blog,"administradores"=>$administradores));
    }
}
