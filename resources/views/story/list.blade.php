@extends('template')

@section('title')
listStory
@endsection

@section('content')
<h1>All Story</h1>
<p>There are {{$stories->count()}} stories.</p>
@if($stories->count())
<ol>
@foreach($stories as $story)
<li>
<h3>{{$story->user->name}} has wrote.</h3>
<strong>{{$story->body}}</strong>
{{$story->created_at}}
<a href="{{route('readStory',$story->id)}}">Read Story</a>
 <a href="{{route('editStory',$story->id)}}">Edit Story</a>
 <a href="{{route('deleteStory',$story->id)}}">Delete Story</a>

</li>
@endforeach
</ol>
@endif
<hr>
<a href="{{route('addStory')}}">Create Story</a>
@endsection