<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Validation\Rules\Password;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Hash;
use Auth;

class Register extends Controller
{
	public function index()
	{
		return view('auth.sign-up');
	}

	public function register(RegisterRequest $request)
	{
		 User::create([
			'first_name' => $request->nama_depan,
			'last_name' => $request->nama_belakang,
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
			return redirect()->route('dashboard.index');
		}
		
		return redirect()->back();
			
	}
}
