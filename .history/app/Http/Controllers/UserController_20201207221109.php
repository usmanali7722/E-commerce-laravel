<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req){

        return Users::where(['email'=>$req->email])->first();

    }
    //
}
