<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    protected $table = 'articulos';

    //Inner Joins desde el Modelo//

    public function  Categorias(){

       return $this->belongsTo('App\Categorias','id_cat','id_categoria');
    } 
}
