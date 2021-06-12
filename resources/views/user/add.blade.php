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
    <input type="text" name="name" value="{{Request::old('name')}}" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
    <span class="text-danger">{{$errors->first('name')}}</span>
    </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name="email" value="{{Request::old('email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <span class="text-danger">{{$errors->first('email')}}</span>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    <span class="text-danger">{{$errors->first('password')}}</span>
  </div>
 
  <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection