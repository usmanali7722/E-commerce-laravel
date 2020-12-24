@extends('master')
@section('content')
 <br>
<div class="container">
    <div class="row">
      
    @foreach($table_products as $item)
 <div class="row cart_item_deveider">
 <div class="col-sm-3">
 <img class="d-block w-100" src="{{$item->gallery}}" alt="First slide">
 </div>

     <div class="col-sm-4" style="height: 150px;"> 
     <h3>{{$item->name}}</h3>  <br> <p> {{$item->description}} </p>
    </div>
     <div class="col-sm-3">
    <button class="btn btn-danger" >Romve to Cart </button>
     </div>
    @endforeach
    </div>
</div>
</div>

@endsection('content')