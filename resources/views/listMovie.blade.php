@extends('layouts.base')

@section('pageTitle', 'List Movie')

@section('content')
  <main>
    <h1>List Movie</h1>
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