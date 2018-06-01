<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    //

    public function getHome()
    {
    	$recommended = Product::InRandomOrder()->limit(4)->get();
    	
    	return view('welcome',['recommended' => $recommended]);
    }
}
