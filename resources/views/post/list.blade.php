@extends('template')

@section('title')
listPost
@endsection

@section('content')
<h1>All Post</h1>
<p>There are {{$posts->count()}} posts.</p>
@if($posts->count())
<ol>
@foreach($posts as $post)
<li>
<strong>{{$post->body}}</strong>
{{$post->created_at}}
 <a href="{{route('deletePost',$post->id)}}">Delete Post</a>
</li>
@endforeach
</ol>
@endif
<hr>
<a href="{{route('addPost')}}">Create Post</a>




@endsection