@extends('template')

@section('title')
addUser
@endsection

@section('content')
<h1>Add User</h1>
<form action="{{route('createUser')}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">
   <div class="form-group">
    <label for="exampleInputName">Full Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Save</button>
</form>




@endsection