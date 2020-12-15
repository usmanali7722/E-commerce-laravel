<?php use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
  $total=ProductController::cartItem();

}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">E-Commerce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Orders</a>
      </li>
      <form action="/search" class="form-inline my-2 my-lg-0">
      <input name="query" class="form-control mr-sm-2 search_box" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <li class="nav-item" style="margin-left:140px;">
        <a class="nav-link" href="#">Cart ({{$total}})</a>
      </li>

      <li class="nav-item dropdown">
    @if(Session::has('user'))
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     {{Session::get('user')['name']}} 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    
          <a class="dropdown-item" href="/logout">Logout</a>
      </li>
      @else
    </ul>
 </div>
</nav>