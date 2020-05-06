<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class VistaPostController extends Controller
{
  
  public function listaPost(){
        $losPosts = Post::all(); //Trae todos los datos de la tabla peliculas
        $vac = compact('losPosts');
        return view('vistapost', $vac);
    }
}
