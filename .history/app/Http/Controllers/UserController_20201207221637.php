<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\User as AppUser;

class UserController extends Controller{
   public function login(Request $req){
        return AppUserr::where(['email'=>$req->email])->first();
    }
}
