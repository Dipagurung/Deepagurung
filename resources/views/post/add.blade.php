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
      <select class="form-control" name="user_id"> 
      @foreach($users as $user)
      <option value="{{$user->id}}" {{$user->id==Request::old('user_id')?'selected':''}}>{{$user->name}}</option>
      @endforeach
    </select>
    <span class="text-danger">{{$errors->first('user_id')}}</span>
 </div>

  <div class="form-group">
      <label for="exampleFormControlTextarea1"> Textarea</label>
      <textarea class="form-control" name="body"  id="exampleFormControlTextarea1" rows="3">{{Request::old('body')}}</textarea>
      <span class="text-danger">{{$errors->first('body')}}</span>
    </div>

<button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection