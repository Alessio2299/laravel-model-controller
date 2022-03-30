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
        // $movies = Movie::where('id',2)->get();  With this method, the result is the film with id equal 2.
        // $movies = Movie::where('vote', '>' , 5)->get(); With this method, the result is the film with highest rating of 5.
        // $movies = Movie::where('nationality','american')->get(); With this method, the result is the film with nationality equal American.
        return view('listMovie', compact('movies'));
    }
}
