@extends('template')

@section('title')
listPost
@endsection

@section('content')
<h1>All Post</h1>
<p>There are {{$posts->count()}} posts.</p>
@if($posts->count())
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
  @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->user_id}}</td>
      <td>{{$post->body}}</td>
      <td>{{$post->created_at}}</td>
      <td>
      <a class="text-warning" href="{{route('readPost',$post->id)}}"><i class="fas fa-book-open"></i></a>
      <a class="text-warning" href="{{route('editPost',$post->id)}}"><i class="fas fa-user-edit"></i></a>
      <a class="text-danger" href="{{route('deletePost',$post->id)}}"><i class="fas fa-user-times"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif
<a href="{{route('addPost')}}">Create Post</a>
@endsection