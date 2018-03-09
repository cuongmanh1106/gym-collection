<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Admin\SizesCModel;
use App\Http\Models\Admin\SizesQModel;
use App\Http\Models\Admin\ProductsQModel;

class SizesController extends Controller {
	public function index($id) {
		$sizes = SizesQModel::get_sizes_by_productid($id);
		$product = ProductsQModel::get_product_by_id($id);
		$data = [
			'sizes' => $sizes,
			'product_id' => $id,
			'product' => $product
		];
		return view('admin.sizes.list')->with($data);
		
	}
	public function create($id) {
		return view('admin.sizes.create',compact('id'));
	}

	public function store($id , Request $request) {
		$data = [
			'product_id' => $id,
			'size' => $_POST['size']
		];
		if(count(SizesCModel::check_insert($id,$_POST["size"]))) {
			$request->session()->flash('alert-warning','This product had this size!! Choose other!!!');
			return back();
		} else if(SizesCModel::insert_size($data)) {
			$request->session()->flash('alert-success','Success');
			return back();
		} else {
			$request->session()->flash('alert-danger','Fail');
			return back();
		}


	}

	public function delete($id, Request $request) {
		if(SizesCModel::delete_size($id)) {
			$request->session()->flash('alert-success','Success');
			return back();
		} else {
			$request->session()->flash('alert-danger','Fail');
			return back();
		}
	}
}