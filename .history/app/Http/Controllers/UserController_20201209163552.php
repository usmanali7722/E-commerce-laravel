<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{
   public function login(Request $req){
        $user=User::where(['email'=>$req->email])->first();
        return $user;
        if(!$user || !Hash())
        
    }
}
