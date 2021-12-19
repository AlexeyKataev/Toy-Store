<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function createAccount() 
	{
		return view('register', [
			'var1' => 'var',
		]);
	}
	
	public function register(Request $request)
	{
		//$request
	}
}
