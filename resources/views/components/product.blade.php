<div class="product">
    <div class="prod-img-container"><img src="{{$product->images[0]->url}}" alt="{{$product->product_name}} image"></div>
    <div class="prod-desc-container">
        <div class="prod-title">
            {{$product->product_name}}
        </div>
        <div class="prod-price">
            AUD {{$product->price/100}}
        </div>
        <div class="prod-btn-grp"><a class="btn-view" href="{{ route('website.get.product',$product->id) }}">VIEW</a>
        <span class="add-cart"><a href="{{ route('cart.get.add', $product->id) }}"><img src="{{ asset('assets/images/icons/add-to-shopping-cart-e-commerce-button.png') }}" alt=""></a>
        </span>
        </div>
    </div>
</div>