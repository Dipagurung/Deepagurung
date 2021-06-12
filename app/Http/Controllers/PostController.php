<?php

namespace App\Http\Controllers;
use App;
use App\Http\Requests\PostAddRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost(App\Models\User $users){
        $data['users']=$users->get();
        return view('post.add',$data);
    }

    public function createPost(PostAddRequest $request){
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
    
    public function editPost(App\Models\Post $post, App\Models\User $users){
        $data['users']=$users->get();
        $data['post']=$post;
        return view('post.edit',$data);
    }

    public function updatePost(App\Models\Post $post, Request $request){
        $post->user_id=$request->get('user_id');
        $post->body=$request->get('body');
        $post->save();
         return redirect()->route('listPost');
    }

    public function readPost(App\Models\Post $post){
        $data['post']=$post;
        return view('post.read',$data);
    }
}
