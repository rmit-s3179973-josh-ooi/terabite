<div class="nav">
    <div class="top-nav">
        <div class="logo"><a href="{{route('website.get.home')}}"><img src="{{asset('assets/images/icons/Terabite-logo.png')}}" alt=""></a></div>
        <div class="search">
        <form method="POST" action="//localhost:3000/products" accept-charset="UTF-8" id="search-form">
            <input class="form-control input-search" name="search" type="text" value="nokia">
        
        </form>        
        </div>
        <div class="cart">
            <div class="cart-item">
                <a href="{{ route('cart.get.view') }}">
                    <div class="cart-icon">
                        <img src="{{asset('assets/images/icons/shopping-cart.png')}}" alt="">
                    </div>
                    <div class="cart-amount">
                    @if(Session::has('cart'))
                    {{Session::get('cart')->totalQty}}
                    @else
                    0
                    @endif
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="bottom-nav">
        <div class="link-grp">
            <div class="links link-item1">Categories</div>
            <div class="links link-item2">Brands</div>
            <div class="links link-item3">About Us</div>
            <div class="links link-item4">Contact Us</div>
        </div>
        <div class="account-group">

            @if(Auth::check())
                
               {!! Html::link(route('website.get.login'),"My Account", ['class'=>'account-item']) !!}
                {!! Html::link(route('website.get.logout'),"Log out", ['class'=>'account-item']) !!}
            @else
                {!! Html::link(route('website.get.login'),"Log In", ['class'=>'account-item']) !!}
                {!! Html::link(route('website.get.register'),"Sign Up", ['class'=>'account-item']) !!}
            @endif
        </div>
    </div>
</div>
