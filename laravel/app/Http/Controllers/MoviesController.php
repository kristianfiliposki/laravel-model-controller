<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
    public function index(){
            
            $dati=config("data");
            $movie=Movie::all();

            return view('serie',compact($dati,$movie));

    }
}
