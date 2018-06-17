<div class="product">
    <div class="prod-img-container"><img src="{{$product->images()->first() != null ? $product->images()->first()->thumbs : null}}" alt="{{$product->product_name}} image"></div>
    <div class="prod-desc-container">
        <div class="prod-title">
            {{$product->product_name}}
        </div>
        <div class="prod-price">
            AUD {{$product->price/100}}
        </div>
        <div class="prod-btn-grp"><a class="btn-view" href="{{ route('website.get.product',$product->id) }}">VIEW</a>
        <span class="add-cart"><a class="add-to-cart-link" href="{{ route('cart.get.add', $product->id) }}"><img src="{{ asset('assets/images/icons/add-to-shopping-cart-e-commerce-button.png') }}" alt=""></a>
        </span>
        </div>
    </div>
</div>