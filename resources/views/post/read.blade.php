@extends('template')

@section('title')
readPost
@endsection

@section('content')
<h1>Full Post</h1>
<h4>written by {{$post->user->name}} </h4>
<p>{{$post->body}}</p>
<i>Created at {{$post->created_at}}</i>
@endsection
