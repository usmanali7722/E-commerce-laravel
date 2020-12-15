@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="deatil_img" src="{{$product['gallery']}}" alt="img">
        </div>
        <div class="col-sm-6">
            <h2>{{$product['name']}}</h2>
            <h3>{{$product['price']}}</h3>
            <h5>{{$product['description']}}</h5>
        </div>
    </div>
</div>
<br> <br>

@endsection('content')