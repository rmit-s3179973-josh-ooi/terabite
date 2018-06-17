<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;

class AccountController extends Controller
{
    public function __construct()
    {
    	$this->middleware(['auth']);
    }

    public function index()
    {
    	$user = Auth::user();
    	$orders = $user->orders()->get();

    	return view('account.index',['user' => $user, 'orders' => $orders]);
    }

    public function category()
    {
        $category = Category::all();

        return view('account.category',['category'=>$category]);
    }

    public function postcategory(Request $request)
    {
        $categories = $request->get('category');        
        $user = Auth::user();
        
        foreach($categories as $key=>$cat)
        {
            $category = Category::find($key);
            $user->categories()->attach($category,['priority'=>$cat[0]]);            
        }

        return redirect()->route('account.get.home');
    }
}
