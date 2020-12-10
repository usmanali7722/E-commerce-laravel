<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App

class UserController extends Controller
{
    function login(Request $req){

        return $req->input();

    }
    //
}
