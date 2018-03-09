<?php

namespace App\Http\Controllers\Display;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Admin\CategoriesQModel;
use App\Http\Models\Admin\ProductsQModel;
use App\Http\Models\Admin\ProductsCModel;

class ProductsController extends Controller {
	
	public function show_products() {
		$products = ProductsQModel::get_products_paging(10);
		$data = [
			'products' => $products
		];

		return view('products')->with($data);

	}

	public function show_detail($id) {
		$product = ProductsQModel::get_product_by_id($id);
		$data = [
			'product' => $product
		];
		return view('single')->with($data);
	}
}