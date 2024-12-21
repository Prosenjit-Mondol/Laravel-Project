<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function userHome(){
        return view('home');
    }

    function userAbout($name){
        return view('about',['user'=>$name]);
    }

    function adminLogin(){
        return view('admin.login');
    }
}
