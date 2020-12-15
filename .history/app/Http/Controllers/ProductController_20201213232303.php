<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

// use Illuminate\Http\Request;

class ProductController extends Controller
{
function index(){

    $data = Product::all();
    return view('product',['products'=>$data]);
                }
}
function detail($id){
    
return Product::find($id);    
    // $data =  Product::detail($id);
    // return view('product',['products'=>$data]);
   

}
