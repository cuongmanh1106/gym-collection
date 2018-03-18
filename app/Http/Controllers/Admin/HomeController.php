<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Http\Models\Admin\BillsQModel;
class HomeController extends Controller {
	public function index() {

		return view('admin.index');
	}
	public function notfound() {
		return view('admin.home.404');
	}
}