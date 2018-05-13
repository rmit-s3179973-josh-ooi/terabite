<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
}
