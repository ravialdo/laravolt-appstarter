<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class Logout extends Controller
{
    public function logout()
	{
		Auth::logout();
		return redirect()->route('app.login');
	}
}
