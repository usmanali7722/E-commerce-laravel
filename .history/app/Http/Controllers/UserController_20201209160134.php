<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller{
   public function login(Request $req){
        $user=User::where(['email'=>$req->email])->first();
    return $user
        
    }
}
