@extends('master')
@section('content')
 <br>
<div class="container">
    <div class="row">
     <div class="col-sm-3"> 
   
    @foreach($table_products as $item)

    <div style="height: 200px;">
    <div style="height: 200px;">
        <br> <br>
      <img class="d-block w-100 slider_class" src="{{$item->gallery}}" alt="First slide">

    </div>
    
    @endforeach

</div>
     <div class="col-sm-4"> 
  
    @foreach($table_products as $item)

    <div class="">
        <br> <br>
      <div > <h3>{{$item->name}}</h3>  <br> <p> {{$item->description}} </p> </div> 
    </div>
    
    @endforeach
  
</div>
     <div class="col-sm-3"> 
    @foreach($table_products as $item)

    <div class="">
        <br> <br>
        <button class="btn btn-danger">Romve to Cart </button>
    
    </div>
    
    @endforeach
    
</div>
</div>
</div>

@endsection('content')