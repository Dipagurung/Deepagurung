@extends('template')

@section('title')
editStory
@endsection

@section('content')
<h1>Edit Story</h1>
<form action="{{route('updateStory',$story->id)}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">

 <div class="form-group">
    <label for="exampleInputUserId">User Id</label>
    <select class="form-control" name="user_id">
      @foreach($users as $user)
      <option {{$user->id==$story->user_id?'selected':''}} value="{{user->id}}">{{$user->name}}</option>
      @endforeach
   </select>
   <span class="text-danger">{{$errors->first('user_id')}}</span>
  </div>

    <div class="form-group">
    <label for="exampleFormControlTextarea1"> Textarea</label>
    <textarea class="form-control" name="body"  id="exampleFormControlTextarea1" rows="3">{{$story->body}}</textarea>
    <span class="text-danger">{{$errors->first('user_id')}}</span>
  </div>

<button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection