<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App\Cart;

class CartMiddleware
{

    const ROUTE = 'cart.get.view';
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(!Session::has('cart'))
        {
            return redirect()->route(self::ROUTE);
        }

        $cart = Session::get('cart');

        if( $cart->isEmpty())
        {
            return redirect()->route(self::ROUTE);
        }

        return $next($request);
    }
}
