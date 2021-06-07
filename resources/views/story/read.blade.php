@extends('template')

@section('title')
readStory
@endsection

@section('content')
<h1>Full Story</h1>
<h4>written by {{$story->user->name}} </h4>
<p>{{$story->body}}</p>
<i>Created at {{$story->created_at}}</i>
@endsection
