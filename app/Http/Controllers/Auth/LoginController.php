<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class LoginController extends Controller
{
	public function authenticate()
	{
		$credentials = request()->only(['nrp','password']);

		if (Auth::attempt($credentials)) {
			return redirect()->intended('home');
		}else{
			return back()->with('error','Login gagal');
		}
	}
}
