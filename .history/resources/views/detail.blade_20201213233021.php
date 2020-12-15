@extends('master')
@section('content')

<div class="container custom_product">

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
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="trending_wrapper">
    <h3>Trending Products</h3>
    @foreach($products as $item)
    <a href="detail/{{$item['id']}}">
    <div class="trending_item">
      <img class="trending_image" src="{{$item['gallery']}}"  alt="First slide">
      <div class=""> <h3>{{$item['name']}}</h3></div> 
    </div>
    </a>
    @endforeach
  </div>

</div>

@endsection('content')