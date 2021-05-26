<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost(){
        return view('post.add');
    }

    public function createPost(Request $request){
     $post=new App\Models\Post;
     $post->user_id=$request->get('user_id');
     $post->body= $request->get('body');
     $post->save(); 
     return redirect()->route('listPost');
    }

    public function listPost(App\Models\Post $posts){
     $data['posts']=$posts->get();
     return view('post.list',$data);
    }

    public function deletePost(App\Models\Post $post){
     $post->delete();
      return redirect()->route('listPost');
    }
    


}
