@extends('template')

@section('title')
loginUser;
@endsection

@section('content')
<h1>Login User</h1>
@if(session('message'))
<div class="alert alert-info">
{{session('message')}}
</div>
@endif
@if(session('error'))
<div class="alert alert-danger">
{{session('error')}}
</div>
@endif
<form action="{{route('postLogin')}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection