@extends('master')
@section('content')
 <br>
<div class="container">
    <div class="row">
     <div class="col-sm-3"> 
    <h2>Search Result</h2><div class="row">
    @foreach($table_products as $item)

    <div class="searched_item">
        <br> <br>
    <a href="detail/{{$item->id}}">
      <img class="d-block slider_class" src="{{$item->gallery}}" alt="First slide">
      <div > <h3>{{$item->name}}</h3>  <br> <p> {{$item->description}} </p> </div> 
    </a>   
    </div>
    
    @endforeach
    </div>
</div>
</div>
</div>

@endsection('content')