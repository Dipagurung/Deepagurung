<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(){
        return view('user.add');
    }

    public function createUser(Request $request){
     $user=new App\Models\User;
     $user->name= $request->get('name');
     $user->email= $request->get('email');
     $user->password= $request->get('password');
     $user->save(); 
     return "Thankyou " .$request->get('name')." for filling up the form";
    }

}
