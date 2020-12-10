<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\

class UserController extends Controller
{
    function login(Request $req){

        return $req->input();

    }
    //
}
