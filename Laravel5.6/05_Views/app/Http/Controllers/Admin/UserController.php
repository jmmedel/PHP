<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
    //

    public function __construct()
    {
         $this->middleware('checkAge');
    } 

    public function listUsers(){
        return "List users - admin/users controller";
    }
    
}
