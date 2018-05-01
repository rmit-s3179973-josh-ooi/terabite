<?php

namespace App\Http\Helpers;

use App\Address;
use Illuminate\Support\Facades\Validator;
use Auth;

trait AccountDetails
{
	protected function validateAddress(array $data)
	{
        return Validator::make($data, [
            'address_line_one' => 'required|string|max:255',
            'address_line_two' =>'nullable|string|max:255',
            'postcode' => 'required|digits:4',
            'suburb' => 'required|string|max:120',
            'state' => 'required|string|min:2|max:3',
            'country' =>'required|string|max:120',
        ]);
    
	}

	protected function createAddress($data)
	{			

		$this->validateAddress($data)->validate();

		$address = Address::firstOrCreate(array_except($data,['_token']));

		$user = Auth::user();

		$user->address()->save($address);

		return redirect()->back();
	}
}