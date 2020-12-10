<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class UserController extends Controller{
   public function login(Request $req){
        return User::where(['email'=>$req->email])->first();
    }
}
