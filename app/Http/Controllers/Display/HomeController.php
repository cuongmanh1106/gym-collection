<?php

namespace App\Http\Controllers\Display;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller {
	public function index() {
		return view('index');
	}
	public function notfound() {
		return view('admin.home.404');
	}
}