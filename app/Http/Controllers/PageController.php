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
    public function listMovie (){
        $movies = Movie::all();
        return view('listMovie', compact('movies'));
    }
}
