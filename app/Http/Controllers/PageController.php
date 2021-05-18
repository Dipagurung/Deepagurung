<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHomePage(){
        return view('home');
    }
    public function getAboutPage(){
        return view('about');
    }
    public function getHobbiesPage(){
        return view('hobbies');
    }
}
