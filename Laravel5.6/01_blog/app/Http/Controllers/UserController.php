<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function dashboard(){
        return view('user.dashboards');
    }

    public function comments(){
        return view('user.comments');
    }


    public function profile(){
        return view('user.profile');
    }

}
