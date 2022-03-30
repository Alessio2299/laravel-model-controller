<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home (){
        return view('homepage');
    }
    public function listFilm (){
        $movies = Movie::all();
        return view('listFilm', compact('movies'));
    }
}
