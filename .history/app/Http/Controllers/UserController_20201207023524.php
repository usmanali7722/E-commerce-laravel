<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\User as AppUser;

class UserController extends Controller
{
    function login(Request $req){

        return AppUser::where(['email'=>$req->email])->first();

    }
    //
}
