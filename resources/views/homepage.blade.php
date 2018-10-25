@extends('layout')

@section('content')
  <ul>
    <li><a href="{{route('blog_post',['post_id'=>'1'])}}">Post 1</a></li>
    <li><a href="{{route('blog_post',['post_id'=>'2'])}}">Post 2</a></li>
    <li><a href="{{route('blog_post',['post_id'=>'3'])}}">Post 3</a></li>
  </ul>
@endsection
