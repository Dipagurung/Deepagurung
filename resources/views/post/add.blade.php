@extends('template')

@section('title')
addPost
@endsection

@section('content')
<h1>Add Post</h1>
<form action="{{route('createPost')}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="form-group">

    <label for="exampleInputUserId">User Id</label>
    <input type="number" name="user_id" class="form-control" id="exampleInputUserId" aria-describedby="useridHelp">
    </div>

    <div class="form-group">
    <label for="exampleFormControlTextarea1"> Textarea</label>
    <textarea class="form-control" name="body"  id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

 
  <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection