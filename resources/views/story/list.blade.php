@extends('template')

@section('title')
listStory
@endsection

@section('content')
<h1>All Story</h1>
<p>There are {{$stories->count()}} stories.</p>
@if($stories->count())
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Id</th>
      <th scope="col">Body</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($stories as $story)
    <tr>
      <th scope="row">{{$story->id}}</th>
      <td>{{$story->user_id}}</td>
      <td>{{$story->body}}</td>
      <td>{{$story->created_at}}</td>
      <td>
      <a class="text-warning" href="{{route('readStory',$story->id)}}"><i class="fas fa-book-open"></i></a>
      <a class="text-warning" href="{{route('editStory',$story->id)}}"><i class="fas fa-user-edit"></i></a>
      <a class="text-danger" href="{{route('deleteStory',$story->id)}}"><i class="fas fa-user-times"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif
<a href="{{route('addStory')}}">Create Story</a>
@endsection