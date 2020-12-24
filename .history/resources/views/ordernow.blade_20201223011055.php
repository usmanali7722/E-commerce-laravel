@extends('master')
@section('content')


<div class="container mt-5">
<h3 style="text-align:center;">Order Now</h3>    
<div class="row">
    
<table class="table">
  <tbody>
    <tr>
      <td>Amount</td>
      <td>{{$total}}</td>
    </tr>
    <tr>
      <td>Tax</td>
      <td>0$</td>
    </tr>
    <tr>
      <td>Delivery</td>
      <td>10$</td>
    </tr>
    <tr>
      <td>Total Amount</td>
      <td>${{$total+10}}</td>
    </tr>
  </tbody>
</table>

</div>
</div>

@endsection('content')