@extends('layouts.base')

@section('pageTitle', 'List Movie')

@section('content')
  <main>
    <h1 class="title">List Movie</h1>
    <div class="content">
      @foreach ($movies as $movie)
        <div class="card">
          <div class="name">
            <span class="titleCard">Title:</span>
            <span>{{$movie->title}}</span>
          </div>
          <div class="original">
            <span class="titleCard">Original:</span>
            <span>{{$movie->original_title}}</span>
          </div>
          <div class="nationality">
            <span class="titleCard">Nationality:</span>
            <span>{{$movie->nationality}}</span>
          </div>
          <div class="date">
            <span class="titleCard">Date:</span>
            <span>{{$movie->date}}</span>
          </div>
          <div class="vote">
            <span class="titleCard">Vote:</span>
            <span>{{$movie->vote}}</span>
          </div>
        </div>
      @endforeach
    </div>
  </main>
@endsection