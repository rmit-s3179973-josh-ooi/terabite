<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hashids;
use Auth;
use App\Product;
use App\Review;

class ReviewController extends Controller
{
    
    public function __construct()
    {
    	$this->middleware(['auth','review']);
    }

    public function index($id)
    {
    	$ids = Hashids::decode($id);
    	$product = Product::find(intval($ids[1]));

    	return view('review',['product'=>$product]);
    }

    public function postReview(Request $request, $id)
    {
    	$ids = Hashids::decode($id);
    	$product = Product::find(intval($ids[1]));
		$user = Auth::user();
    	
    	$request->validate([
    		'rating'=>'integer|nullable',
    		'review' => 'nullable',
    	]);

    	$review = Review::create([
    		'user_id'=>$user->id,
    		'product_id' => $product->id,
    		'rating' =>$request->get('rating'),
    		'review' => $request->get('review'),
    	]);

    	return redirect()->route('website.get.home');
    }


}
