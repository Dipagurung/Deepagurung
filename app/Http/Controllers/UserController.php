<?php

namespace App\Http\Controllers;
use App;
use Auth;
use Hash;
use App\Http\Requests\UserAddRequest;
use App\Http\Requests\UserEditRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(){
        return view('user.add');
    }

    public function createUser(UserAddRequest $request){
     $user=new App\Models\User;
     $user->name= $request->get('name');
     $user->email= $request->get('email');
     $user->password= Hash::make($request->get('password'));
     $user->save(); 
     return redirect()->route('listUser');
    }

    public function listUser(App\Models\User $users){
        $data['users']=$users->get();
        return view('user.list',$data);
    }
    public function deleteUser(App\Models\User $user){
        $user->delete();
        return redirect()->route('listUser');
    }
    public function editUser(App\Models\User $user){
        $data['user']=$user;
        return view('user.edit',$data);
    }

    public function updateUser(App\Models\User $user, UserEditRequest $request){
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->password=Hash::make($request->get('password'));
        $user->save();
         return redirect()->route('listUser');
    }
    public function getLogin(){
        return view('user.login');
    }
    public function postLogin(Request $request){
      $credential['email']=$request->get('email');
      $credential['password']=$request->get('password');
      if(Auth::attempt($credential)){
          
         return redirect()->route('getProfile');
      }else{
         
          return redirect()->back()->with('error','username or password doesnot match');
      }
    }
    public function getProfile(){
        return view('user.profile');
    }
    public function getLogout(){
       Auth::logout();
       return redirect()->route('getLogin')->with('message','You have been logout successfully');
    }


}