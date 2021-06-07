@extends('template')

@section('title')
listUser
@endsection

@section('content')
<h1>All User</h1>
<p>There are {{$users->count()}} users.</p>
@if($users->count())
<ol>
@foreach($users as $user)
<li>
<strong>{{$user->name}}</strong>
<strong>{{$user->email}}</strong>
<strong>{{$user->password}}</strong>
{{$user->created_at}}
<a href="{{route('editUser',$user->id)}}">Edit Post</a>
 <a href="{{route('deleteUser',$user->id)}}">Delete User</a>
</li>
@endforeach
</ol>
@endif
<hr>
<a href="{{route('addUser')}}">Create User</a>
@endsection