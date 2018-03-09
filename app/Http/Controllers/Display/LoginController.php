<?php

namespace App\Http\Controllers\Display;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;
use App\Http\Requests\productsRequest;
use Auth;
use App\User;
use Hash;


class LoginController extends Controller {
	public function getLogin() {
		//return view('index');
	}
	public function postLogin(Request $request) {
		$login = array(
			'email' => $_POST['email'],
			'password' => $_POST['password'],
			'role' => 1
		);
		//echo $_POST["password"];
		if(Auth::attempt($login)) {
			return redirect()->route('products.show');
		} else {
			$request->session()->flash('alert-danger','Wrong Email or Password');
			return back();
		}
	}

	public function getRegister() {

	}

	public function postRegister(Request $request) {
		if (User::create(array('name'=>$request->name,'email'=>$request->email,'role'=>1,'password'=>Hash::make($request->password)))) {
            $request->session()->flash('alert-success',"Success");
            return redirect()->back();
        } else {
            $request->session()->flash('alert-danger',"Fail");
            return redirect()->back();
        }

	}

	public function logout() {
		return redirect()->back()->with(Auth::logout());
	}
}