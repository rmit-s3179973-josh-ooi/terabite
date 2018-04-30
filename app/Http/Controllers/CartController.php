<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use App\Cart;

class CartController extends Controller
{
    protected function addItemToCart(Request $request, $id)
    {
        $product = Product::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);

        $cart->add($product,$product->id);

        $request->session()->put('cart',$cart);

        return redirect()->route('test');
    }

    protected function test()
    {
        if(Session::has('cart')){
            $cart = new Cart(Session::get('cart'));
            dd($cart);
        }
    }

    protected function getCart()
    {
    	$cart = null;
    	if(Session::has('cart'))
		{
			$cart = Session::get('cart');
		}

		return view('shop.cart',['cart'=>$cart]);
    }
}
