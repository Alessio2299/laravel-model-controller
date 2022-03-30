@extends('layouts.base')

@section('pageTitle', 'Homepage')

@section('content')
  <main>
    <h1>Homepage</h1>
    <ul>
      <li><a href="{{route('home')}}">Home</a></li>
      <li><a href="{{route('listFilm')}}">List Film</a></li>
    </ul>
  </main>
@endsection