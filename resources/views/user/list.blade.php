@extends('template')

@section('title')
listUser
@endsection

@section('content')
<h1>All User</h1>
<p>There are {{$users->count()}} users.</p>
@if($users->count())
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->created_at}}</td>
      <td>
      <a class="text-warning" href="{{route('editUser',$user->id)}}"><i class="fas fa-user-edit"></i></a>
      <a class="text-danger" href="{{route('deleteUser',$user->id)}}"><i class="fas fa-user-times"></i></a>
     </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif
<hr>
<a href="{{route('addUser')}}">Create User</a>
@endsection