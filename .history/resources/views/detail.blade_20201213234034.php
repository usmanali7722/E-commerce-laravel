@extends('master')
@section('content')
<br> <br>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="deatil_img" src="{{$product['gallery']}}" alt="img">
        </div>
        <div class="col-sm-6">
            <a class="btn btn-primary" href="{{'/'}}">Go Back</a>
            <a class="btn btn-success" href="{{'/'}}">Go Back</a>
            <h2>{{$product['name']}}</h2>
            <h3>{{$product['price']}}</h3>
            <h5>{{$product['description']}}</h5>
        </div>
    </div>
</div>
<br> <br>

@endsection('content')