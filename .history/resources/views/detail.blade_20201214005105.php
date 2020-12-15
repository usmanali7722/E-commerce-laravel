@extends('master')
@section('content')
<br> <br>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="deatil_img" src="{{$product['gallery']}}" alt="img">
        </div>
        <div class="col-sm-6">
        <a class="" href="{{'/'}}">Go Back</a>
        <br>
            <h2>{{$product['name']}}</h2>
            <h3>{{$product['price']}}</h3>
            <h5>{{$product['description']}}</h5>
           <br>
<form action="/addtocart" method="POST">
@csrf
<input type="text">
<a class="btn btn-primary" href="/">Add to cart</a>
</form>
           <br>

           <a class="btn btn-success" href="{{'/'}}">Buy Now</a>
        </div>
    </div>
</div>
<br> <br>

@endsection('content')