<?php

namespace App\Http\Helpers;

use App\User;
use App\VerificationCode;
use App\Mail\AccountVerification;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Support\Facades\Mail;

trait SendVerificationCode
{

	protected function SendVerificationCode($user)
	{			
		$link = route('website.get.verification-code',['code'=>Hashids::encode($user->id)]);

		Mail::to($user->email)->send(new AccountVerification($link,$user));
	}
}