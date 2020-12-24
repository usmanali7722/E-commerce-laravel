<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;
use Session;

// use Illuminate\Http\Request;

class ProductController extends Controller
{
function index(){

    $data = Product::all();
    return view('product',['products'=>$data]);
                }

function detail($id){
    $dat =  Product::find($id);
    return view('detail',['product'=>$dat]);
}

function search(Request $req){
    $data= Product::where('name','like','%'.$req->input('query').'%')->get();
    return view('search',['products'=>$data]);
}

function addToCart(Request $req){
    if($req->session()->has('user')){
        $cart=new Cart;
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/login');
    }else{
        return redirect('/login');
    }
}
 static function cartItem(){
    $userId=Session::get('user')['id'];
    return Cart::where('user_id',$userId)->count();
}


}