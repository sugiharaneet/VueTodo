<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::post('/login', 'Auth\LoginController@login')->name('login');  
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/user', function(){
    return Auth::user();
});

Route::resource('/todo', 'TodoController');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
