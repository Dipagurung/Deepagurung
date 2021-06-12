<?php

namespace App\Http\Controllers;
use App;
use App\Http\Requests\StoryAddRequest;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function addStory(App\Models\User $users){
        $data['users']=$users->get();
        return view('story.add',$data);
    }
    public function createStory(StoryAddRequest $request){
        $story=new App\Models\Story;
        $story->user_id=$request->get('user_id');
        $story->body= $request->get('body');
        $story->save();
        return redirect()->route('listStory'); 
       
       }
       public function listStory(App\Models\Story $stories){
        $data['stories']=$stories->get();
        return view('story.list',$data);
       }

       public function deleteStory(App\Models\Story $story){
        $story->delete();
         return redirect()->route('listStory');
       }

       public function editStory(App\Models\Story $story, App\Models\User $users){
        $data['users']=$users->get();
        $data['story']=$story;
        return view('story.edit',$data);
    }

       public function updateStory(App\Models\Story $story, StoryAddRequest $request){
           $story->user_id=$request->get('user_id');
           $story->body=$request->get('body');
           $story->save();
            return redirect()->route('listStory');
       }
   
       public function readStory(App\Models\Story $story){
           $data['story']=$story;
           return view('story.read',$data);
       }
      
   
}
