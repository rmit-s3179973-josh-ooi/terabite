<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\VerificationCode;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
	use RedirectsUsers;

	protected $redirectTo = '/';


    protected function activate($code)
    {    	
    	
    	$id = Hashids::decode($code);    	
    	
    	if($id == null)
    	{
    		return view('error')->with(['message'=>"invalid code"]);
    	}

    	$user = User::find($id[0]);
    	if($user == null)
    	{
    		return view('error')->with(['message'=>"Account not found"]);
    	}	

    	if(!$user->activated){
    		$user->update(['activated'=>true]);
    		Auth::logout();
    		Auth::login($user);
    		
    		return redirect($this->redirectPath())->with(['status'=>['subject'=>'Account Activated','message'=>'You have successfully activated your account.']]);
    	}

    	return redirect($this->redirectPath());
    }
}
