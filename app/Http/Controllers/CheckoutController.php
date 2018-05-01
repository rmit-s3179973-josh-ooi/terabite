<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Delivery;
use App\Http\Helpers\AccountDetails;

class CheckoutController extends Controller
{
    use AccountDetails;

    public function __construct()
    {
    	$this->middleware('auth');
    }
    public function getDeliveryOption()
    {
    	$user = Auth::user();
        $cart = null;
        $deliveryOptions = Delivery::all();
        
        if(Session::has('cart'))
        {
            $cart = Session::get('cart');
        }

    	return view('shop.delivery',['user' => $user, 'cart' => $cart, 'deliveryOptions'=>$deliveryOptions]);
    }

    public function postDeliveryOption(Request $request)
    {
        $request->validate([
            'address_option' =>'required',
            'delivery_option' =>'required'
        ]);

        return redirect()->route('checkout.get.payment')
                            ->with([
                                'address_option'=>$request->get('address_option'), 
                                'delivery_option'=>$request->get('delivery_option')
                                ]);
    }

    public function getAddAddress()
    {
        return view('temp');
    }

    public function postAddAddress(Request $request)
    {        
        $this->createAddress($request->all());
    }

    public function getPayment($data)
    {
        dd($data);
    }
}
