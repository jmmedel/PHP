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


Route::prefix('admin')->group(function(){

    Route::get('users', function(){
        return "admin users";
    });

    Route::get('posts',function(){
        return "admin posts";
    });

    Route::get('user/{userId}',function($userId){
        return 'user id:' . $userId;
    });

});