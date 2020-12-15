@extends('master')
@section('content')

<div class="container">
    <div class="row">
    <div class="col-sm-4"></div> 
    @foreach($products as $item)
    <div class="searched_item">
    <a href="detail/{{$item['id']}}">
      <img class="d-block w-100 slider_class" src="{{$item['gallery']}}" alt="First slide">
      <div class="carousel-caption slider_text"> <h3>{{$item['name']}}</h3> <p> {{$item['description']}} </p> </div> 
    </a>   
    </div>
    @endforeach
</div>
</div>
</div>

@endsection('content')