<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;


class HomeController extends Controller
{
    public function index(){

        $dati=config("data");
        $movie=Movie::all();

        return view('welcome',compact("movie"),$dati);
    }
}
