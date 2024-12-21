<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

//route::redirect('/home','/');



// Route::get('/about/{name}',function($name){

//     return view('about',['name'=>$name]);
// });

// Route::get('user',[UserController::class,'getUser']);
// Route::get('about',[UserController::class,'aboutUser']);
// Route::get('user/{name}',[UserController::class,'aboutUser']);


Route::view('/Home','home');

Route::view('/ab','about');
Route::get('user-home',[UserController::class,'userHome']);
Route::get('user-about',[UserController::class,'userAbout']);