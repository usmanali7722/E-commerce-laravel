@extends('master')
@section('content')
 <br>
<div class="container">
    <div class="row">
     <div class="col-sm-3"> 
    @foreach($table_products as $item)
 <div style="height: 150px;">
        <br> <br>
 <img class="d-block w-100" src="{{$item->gallery}}" alt="First slide">
 </div>
    @endforeach
        </div>

     <div class="col-sm-4" style="height: 150px;"> 
    @foreach($table_products as $item)
        <br> <br>
      <div  > <h3>{{$item->name}}</h3>  <br> <p> {{$item->description}} </p> </div> 
    @endforeach
  
    </div>
     <div class="col-sm-3"> 
    @foreach($table_products as $item )
        <button class="btn btn-danger" >Romve to Cart </button>
    @endforeach
    </div>
</div>
</div>

@endsection('content')