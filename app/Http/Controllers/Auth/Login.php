<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Auth;

class Login extends Controller
{
	public function index()
	{
		return view('auth.sign-in');
	}
	
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
		
		toast('Gagal masuk, silahkan periksa terlebih dahulu akun anda.', 'error');
		return redirect()->back();
	}
}
