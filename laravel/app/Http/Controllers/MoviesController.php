<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
    public function index(){

        $movie=Movie::all();

        return view('serie',compact("movie"));
    }
}