<?php

namespace App\Http\Middleware;

use Closure;
use App\Product;
use Auth;
use Hashids;

class ReviewMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id = $request->route('id');
        $ids = Hashids::decode($id);
        $user = Auth::user();
        try{
            $product = Product::findOrFail(intval($ids[1]));
        }catch(ModelNotFoundException $e)
        {
            abort(403,'Unauthorised action');
        }

        if($user->id != $ids[0])
        {
            abort(403,'Unauthorised action');
        }

        if(!$user->hasPurchaseProduct($product->id))
        {
            abort(403,'Unauthorised action');
        }

        if($user->hasReviewProduct($product->id))
        {
            return redirect()->route('website.get.home');
        }

        return $next($request);
    }
}
