@extends('master')
@section('content')

<div class="container abc">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-4"></div>
        <div class="col-sm-4 ">
<form action="login" method="POST" >
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail2">User Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword3">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword3">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
        </div>
        </div>
    </div>
</div>

@endsection('content')