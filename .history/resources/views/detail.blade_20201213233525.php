@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$product['gallery']}}" alt="img">
        </div>
        <div class="col-sm-6">
            <h2>{{$product['name']}}</h2>
            <h2>{{$product['name']}}</h2>
        </div>
    </div>
</div>

@endsection('content')