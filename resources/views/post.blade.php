@extends('layout')

@section('content')
  <h1 class="importante">Titolo del post</h1>
  <p>{{$testo}}</p>
  @include('partials.contattaci')
@endsection
