<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;

class UserController extends Controller
{
    function login(Request $req){

        return User::where(['email'=>$req->email])->first();

    }
    //
}
