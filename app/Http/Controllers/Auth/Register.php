<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Validation\Rules\Password;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;

class Register extends Controller
{
	public function register(Request $request)
	{
		$request->validate([
			'first_name' => 'required',
			'last_name' => 'required',
			'username' => 'required|alpha_dash|unique:users',
			'email' => 'required|unique:users',
			'password' => ['required', Password::min(8)->letters()
				->mixedCase()->numbers()->symbols()
			],
			'confirm_password' => 'required',
			'terms' => 'required'
		]);
		
		User::create([
			'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'email' => $request->email,
			'username' => $request->username,
			'password' => Hash::make($request->password),
			'role' => 'user'
		]);
		
		$credentials = [
			'email' => $request->email,
			'password' => $request->password
		];
		
		if(Auth::attempt($credentials)){
			return view('message');
		}
		
		return redirect()->back();
			
	}
	
    public function index()
	{
		return view('auth.sign-up');
	}
}
