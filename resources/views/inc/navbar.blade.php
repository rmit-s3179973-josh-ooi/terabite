
@section('css')
  {!! Html::style(asset('css/website/nav.css')) !!}
@endsection
@section('content')

<nav id="link1" class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/resources/views/welcome">
      <img src="" width="30" height="30" class="d-inline-block align-top" alt="">Terabite    
    </a>

    <div class="col-lg-6">
      <div class="input-group">
        <div>
          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </div>
        <input type="text" class="form-control rounded-left" placeholder="Search">
        <div class="input-group-btn">
          <select aria-label="Categories" class="nav-link dropdown-toggle" size="1" id="navbarDropdownMenuLink">
            <option value="0">All Categories</option>
            <option value="">Computers &amp; Laptops</option>
            <option value="">Headphones</option>
            <option value="">Printers</option>
            <option value="">Speakers</option>
            <option value="">Tvs</option>
            <option value="">Phones</option>
            <option value="">Cameras</option>
            <option value="">Accessories</option>
            <option value="">Hardware</option>
            <option value="">Coins</option>
            <option value="">Collectables</option>
          </select>
        </div>
      </div>
    </div>

    <div class="d-flex ml-auto">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#globalNavbar" aria-controls="globalNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <div>
      <ul class="navbar-nav d-none d-lg-flex ml-2 order-3">
        <li class="btn btn-cart pull-right">
          <button type="button" class="btn btn-outline-primary">
            Cart <span class="badge badge-light">4</span>
          </button>
        </li>
      </ul>
      <ul class="navbar-nav d-lg-none">
        <li class="nav-item-divider"></li>
        <li class="btn btn-cart pull-right">
          <button type="button" class="btn btn-outline-light text-white">
            Cart <span class="badge badge-light">4</span>
          </button>
        </li>
      </ul>


    </div>
</nav>

<div id="link2" class="navbar navbar-expand-lg navbar-light ">
  <ul class="navbar-nav mr-auto order-1">
    <li class="nav-item">
      <a class="nav-link" href="#">Categories</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Brands</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>
  </ul>
  <ul class="navbar-nav d-none d-lg-flex ml-2 order-3">
    <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
    <li class="nav-item"><a class="nav-link" href="register">Sign up</a></li>
  </ul>
  <ul class="navbar-nav d-lg-none">
    <li class="nav-item-divider"></li>
    <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
    <li class="nav-item"><a class="nav-link" href="register">Sign up</a></li>
  </ul>
</div>



