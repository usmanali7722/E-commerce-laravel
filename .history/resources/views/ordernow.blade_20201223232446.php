@extends('master')
@section('content')


<div class="container mt-5">
<h3 style="text-align:center;">Order Now</h3>    
<div class="row">
    
<table class="table">
  <tbody>
    <tr>
      <td>Amount</td>
      <td>{{$total}}$</td>
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
      <td>{{$total+10}}$</td>
    </tr>
  </tbody>
</table>


<form action="/orderplace" method="POST">
  <div class="form-group" style="width: 500px;" >
      <label for="address">Address</label>
    <textarea class="form-control" id="address" name="address" placeholder="Enter Your Address" rows="5"> </textarea>
  </div>
  <div class="form-group">
    <input type="radio" value="cash" name="payment_method"><span>  Online Payment</span><br><br>
    <input type="radio" value="cash" name="payment_method"><span>  Cash on Delivery</span><br><br>
    <input type="radio" name="payment_method"><span>  EMI Payment</span><br><br>
  </div>
 
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>

</div>
</div>

@endsection('content')