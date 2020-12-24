<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;
use Session;
use Illuminate\Support\Facades\DB;

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

function cartList(){
    $userId=Session::get('user')['id'];
    $products=DB::table('cart')->join('table_products','cart.product_id','=','table_products.id')->where('cart.user_id',$userId)->select('table_products.*','cart.id as cart_id')->get();
    return view('cartlist',['table_products'=>$products]);
}

function removeCart($id){
    Cart::destroy($id);
    return redirect('cartlist');
}

function ordernow(){
    $userId=Session::get('user')['id'];
 $total= $products=DB::table('cart')->join('table_products','cart.product_id','=','table_products.id')->where('cart.user_id',$userId)->sum('table_products.price');
    return view('ordernow',['total'=>$total]);
}

function orderPlace(Request $req){
    $userId=Session::get('user')['id'];
    $allCart=Cart::where()
    return $req->input();
}

}