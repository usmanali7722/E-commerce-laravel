@extends('master')
@section('content')

<div class="container abc">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
<form action="login" method="" >
@crf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
        </div>
    </div>
</div>

@endsection('content')