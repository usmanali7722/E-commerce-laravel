@extends('master')
@section('content')
 <br>
<div class="container">
    <div class="row">
     <div class="col-sm-3"> 
   
    @foreach($table_products as $item)

    <div class="searched_item">
        <br> <br>
      <img class="d-block w-100 slider_class" src="{{$item->gallery}}" alt="First slide">

    </div>
    
    @endforeach

</div>
     <div class="col-sm-4"> 
  
    @foreach($table_products as $item)

   <button class="btn btn-danger">Romve Item </button>
    
    @endforeach
  
</div>
     <div class="col-sm-3"> 
    @foreach($table_products as $item)

    <div class="searched_item">
        <br> <br>
    <a href="detail/{{$item->id}}">
      <img class="d-block w-100 slider_class" src="{{$item->gallery}}" alt="First slide">
      <div > <h3>{{$item->name}}</h3>  <br> <p> {{$item->description}} </p> </div> 
    </a>   
    </div>
    
    @endforeach
    
</div>
</div>
</div>

@endsection('content')