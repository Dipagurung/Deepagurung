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
<h3>{{$post->user->name}} has wrote.</h3>
<strong>{{$post->body}}</strong>
{{$post->created_at}}
 <a href="{{route('readPost',$post->id)}}">Read Post</a>
 <a href="{{route('editPost',$post->id)}}">Edit Post</a>
 <a href="{{route('deletePost',$post->id)}}">Delete Post</a>

</li>
@endforeach
</ol>
@endif
<hr>
<a href="{{route('addPost')}}">Create Post</a>
@endsection