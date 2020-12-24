@extends('master')
@section('content')


<div class="container" style="margin-top: 2%;">
    <div class="row">
    <h3 style="text-align: center;" style="margin-bottom: 5%;">Cart items</h1>
    <a href="ordernow" class="btn btn-success"></a>
    @foreach($table_products as $item)
    <div class="row cart_item_deveider">
    <div class="col-sm-3">
    <img class="d-block w-100" src="{{$item->gallery}}" alt="First slide">
    </div>
    <div class="col-sm-4" style="height: 150px;"> 
     <h3>{{$item->name}}</h3>  <br> <p> {{$item->description}} </p>
    </div>
     <div class="col-sm-3">
    <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger" >Romve to Cart </a>
     </div>
    </div>
     @endforeach
</div>
</div>

@endsection('content')