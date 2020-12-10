<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller{
   public function login(Request $req){
    dd($req->all());    
    return User::where(['email'=>$req->email])->first();
        
    }
}
