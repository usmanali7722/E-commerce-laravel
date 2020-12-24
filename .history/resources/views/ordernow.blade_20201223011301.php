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


<form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>
  <div class="form-group form-check">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>

@endsection('content')