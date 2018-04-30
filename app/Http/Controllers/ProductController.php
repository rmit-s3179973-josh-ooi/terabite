<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    
    protected function getProduct($id)
    {
    	$product = Product::with(['images','category'])->find($id);
    	
    	return view('product',['product'=>$product]);
    }
    
	
    protected function search(Request $request)
    {
    	$products = Product::with(['images'])->get();

    	return view('product_listing',['products'=>$products]);
    }
}
