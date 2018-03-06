<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
use Hash;
class LoginController extends Controller {

	public function getLogin(Request $request) {
		return redirect()->route('admin');
	}
	
	public function postLogin(Request $request) {
		$login = array(
			'email' => $request->email,
			'password' => $request->password,
			
		);

		if(Auth::attempt($login) && Auth::user()->role > 1) {
			return redirect()->route('admin.users.list');
		} else {
			return back();
		}

		// User::create(array('name'=>'Harrik','email'=>'a@gmail.com','role'=>4,'password'=>Hash::make('123')));
		// return back();
	}
}