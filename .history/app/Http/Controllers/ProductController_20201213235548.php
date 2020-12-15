<?php

namespace App\Http\Controllers;
use App\Models\Product;
use GuzzleHttp\Psr7\Request;
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

function search(Request $req){
    ret

}
}