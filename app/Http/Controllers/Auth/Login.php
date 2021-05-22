<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Auth;

class Login extends Controller
{
	public function login(LoginRequest $request)
	{
		$credentials = [
			'email' => $request->email,
			'password' => $request->password
		];
		
		if(Auth::attempt($credentials))
		{
			return redirect()->route('dashboard.index');
		}
		
		return redirect()->back();
	}
	
    public function index()
	{
		return view('auth.sign-in');
	}
}
