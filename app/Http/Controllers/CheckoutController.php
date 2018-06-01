<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Hashids;
use App\Delivery;
use App\Order;
use App\Product;
use App\Http\Helpers\AccountDetails;
use App\Notifications\SendReceiptNotification;
use App\Notifications\ReviewProduct;

class CheckoutController extends Controller
{
    use AccountDetails;

    public function __construct()
    {
    	$this->middleware('auth');
        $this->middleware('cart')->except('getComplete');
    }
    public function getCheckout()
    {
    	$user = Auth::user();
        $cart = null;
        $deliveryOptions = Delivery::all();
        
        if(Session::has('cart'))
        {
            $cart = Session::get('cart');
        }

    	return view('shop.checkout',['user' => $user, 'cart' => $cart, 'deliveryOptions'=>$deliveryOptions]);
    }

    public function postCheckout(Request $request)
    {
        $user = Auth::user();
        

        $request->validate([
            'address_option' =>'required',
            'delivery_option' =>'required',
            'payment_number' =>'required',
            'payment_name' =>'required',
            'payment_expiry' =>'required',
            'payment_cvc' =>'required',
        ]);
        $cart = $request->session()->pull('cart');
        try{
            $delivery = Delivery::find(intval($request->get('delivery_option')));        
        }catch(ModelNotFoundException $e)
        {
            abort(403, 'Unauthorized action');
        }        
        

        $order = Order::create(
            [
                'user_id' => $user->id,
                'delivery_option_id' => $delivery->id,
                'total' => $cart->totalPrice + $delivery->cost,
                'qty' => $cart->totalQty,
            ]);

        foreach($cart->items as $item)
        {
            
            try{
                $product = Product::findOrFail(intval($item['item']->id));
            }catch(ModelNotFoundException $e)
            {

                abort(403, 'Unauthorized action');
            }
        
            $order->products()->attach($product,['qty'=>$item['qty'],'price'=>$item['price']]);
        }
        
        // send confirmation email
        // $user->notify(new SendReceiptNotification($order));
        $user->notify(new ReviewProduct($order));
        return redirect()->route('checkout.get.complete',['id'=>Hashids::encode($order->id)]);
                            
    }

    public function getAddAddress()
    {
        return view('temp');
    }

    public function postAddAddress(Request $request)
    {        
        $this->createAddress($request->all());
    }

    public function getComplete($id)
    {
        
        try{
            $order = Order::findOrFail(intval(Hashids::decode($id)));                
        }catch(ModelNotFoundException $e)
        {
            abort(403,"Unauthorized action");
        }

        return view('shop.complete');
    }
}
