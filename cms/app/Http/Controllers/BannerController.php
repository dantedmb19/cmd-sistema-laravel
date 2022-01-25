<?php

namespace App\Http\Controllers;
use App\Blog;
use App\Banner;
use App\Administradores;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function Index(){

    	$banner = Banner::all();
    	$blog = Blog::all();
        $administradores = Administradores::all();
    	return view("paginas.banner",array("banner"=>$banner,"blog"=>$blog,"administradores"=>$administradores));
    }
}
