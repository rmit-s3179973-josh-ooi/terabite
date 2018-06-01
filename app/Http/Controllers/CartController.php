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
        try{
            $product = Product::findOrFail($id);  
        }catch(ModelNotFoundException $e)
        {
            abort(403,'Unauthorized action');
        }
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $qty = $request->has('qty') ? $request->get('qty') : 1;

        $cart->add($product,$product->id, $qty);

        $request->session()->put('cart',$cart);
        // dd($cart);
        return response()->json(['response'=>'successful','cart'=>$cart]);
    }

    protected function test(Request $request)
    {
        if(Session::has('cart')){
            $request->session()->forget('cart');
            
        }
    }

    protected function getCart()
    {
    	$cart = null;
    	if(Session::has('cart'))
		{
			$cart = Session::get('cart');
            $cart = $cart->isEmpty() ? null : $cart;
		}
        
        
		return view('shop.cart',['cart'=>$cart]);
    }

    protected function removeItemFromCart(Request $request, $id)
    {
        $cart = Session::get('cart');        
        try{
            $product = Product::findOrFail($id);  
        }catch(ModelNotFoundException $e)
        {
            abort(403,'Unauthorized action');
        }
        

        // remove from list
        $cart->removeItem($product->id);
        
        // update session
        $request->session()->put('cart',$cart);

        return redirect()->route('cart.get.view');
    }

    protected function updateCart(Request $request)
    {
        $cart = Session::get('cart');
        
        foreach($request->get("product") as $item)
        {            
            $cart->updateItemQuantity(intval($item['id']),intval($item['quantity']));
        }

        $request->session()->put('cart',$cart);

        return redirect()->route('cart.get.view');
    }
}
