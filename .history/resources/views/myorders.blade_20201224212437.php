@extends('master')
@section('content')


<div class="container mt-5">
<h3 style="text-align:center;">My Orders</h3>    
<div class="row">
    @foreach($orders as $item)
    <div class="row cart_item_deveider">
    <div class="col-sm-3">
    <img class="d-block w-100" src="{{$item->gallery}}" alt="First slide">
    </div>
    <div class="col-sm-4" style="height: 150px;"> 
     <h3>{{$item->name}}</h3>  <br> 
     
     <p> {{$item->description}} </p>
    </div>
    </div>
     @endforeach
   
</div>
</div>

@endsection('content')