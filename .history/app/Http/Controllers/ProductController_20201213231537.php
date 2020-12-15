<?php

namespace App\Http\Controllers;
use App\Models\Product;
// use Illuminate\Http\Request;

class ProductController extends Controller
{
function index(){

    $data = Product::all();
    return view('product',['products'=>$data]);
                }
}
function detail($id){
    
    
    $data = Product::all();
    view('product',['products'=>$data]);
    return Product::find($id);

}
