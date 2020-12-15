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

function detail($id){
    $dat =  Product::find($id);
    return view('detail',['product'=>$dat]);
}

public function FunctionName(Type $var = null)
{
    # code...
}
}