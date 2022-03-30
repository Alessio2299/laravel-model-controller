@extends('layouts.base')

@section('pageTitle', 'List Film')

@section('content')
  <main>
    <h1>List Film</h1>
    <ul>
      <li><a href="{{route('home')}}">Home</a></li>
      <li><a href="{{route('listFilm')}}">List Film</a></li>
    </ul>
    <ul>
      @foreach ($movies as $movie)
      <li>{{$movie->title}}
        <ul>
          <li>{{$movie->original_title}}</li>
          <li>{{$movie->nationality}}</li>
          <li>{{$movie->date}}</li>
          <li>{{$movie->vote}}</li>
        </ul>
      </li> 
      @endforeach
    </ul>
  </main>
@endsection