@extends('master')
@section('content')

<div class="container custom_product">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @foreach($products as $item)
    <div class="carousel-item {{ $item['id']==1?'active':'' }}">
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