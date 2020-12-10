<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller{
   public function login(Request $req){
        return ::where(['email'=>$req->email])->first();
    }
}
