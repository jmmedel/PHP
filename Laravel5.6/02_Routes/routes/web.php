<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',"PublicController@index");


Route::namespace('Admin')->prefix('admin')->group(function(){
    // Add location the controoler 
    Route::get('users', 'UserController@listUsers');

    Route::get('posts',function(){
        return "admin posts";
    });

    Route::get('user/{userId}/{name}','PublicController@userInfo');

});