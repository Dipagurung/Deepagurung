@extends('template')

@section('title')
editUser
@endsection

@section('content')
<h1>Edit User</h1>
<form action="{{route('updateUser',$user->id)}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">
   <div class="form-group">
    <label for="exampleInputName">Full Name</label>
    <input type="text" name="name"  value="{{$user->name}}" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email"  value="{{$user->email}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password"  value="{{$user->password}}"  class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection