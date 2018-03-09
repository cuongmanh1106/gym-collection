<?php

namespace App\Http\Controllers\Display;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Admin\CategoriesQModel;
use App\Http\Models\Admin\ProductsQModel;
use App\Http\Models\Admin\ProductsCModel;
use App\Http\Models\Admin\BillsCModel;
use Cart;
use Auth;

class CartController extends Controller {
	public function sale() {

		$id = $_GET["id"];
		$product = ProductsQModel::get_product_by_id($id);
		//add-to-cart
		Cart::add(array('id'=>$id,'name'=>$product->name,'qty'=>1,'price'=>$product->price,'options'=>array('img'=>$product->image)));
		$content = Cart::content();
		$data = [
			'content' => $content
		];

		return view('cart.show')->with($data);
	}

	//check out
	public function checkout() {
		$content = Cart::content();
		$total = Cart::subtotal();
		$data = [
			'content' => $content,
			'total' => $total
		];
		return view('cart.checkout')->with($data);
	}

	public function delete() {
		$id = $_GET["id"];
		Cart::remove($id);
		// echo $id;
		$content = Cart::content();
		$total = Cart::subtotal();
		$data = [
			'content' => $content,
			'total' => $total
		];
		return view('cart.delete')->with($data); 
		
	}

	public function update() {
		$id = $_POST["id"];
		$qty = $_POST["qty"];
		Cart::update($id,$qty);
		$content = Cart::get($id);
		$total = Cart::subtotal();
		$str = $content->qty*$content->price."/".$total;
		echo $str;
	}

	public function book() {

		$content = Cart::content();
		$total = Cart::subtotal();
		$data_bill = [
			'member_id' => Auth::user()->id,
			'total' => $total
		];
		$bill_id = BillsCModel::insert_bill($data_bill);
		if($bill_id!= null) {
			foreach($content as $c) {
				$data = [
					'bill_id' => $bill_id,
					'product_id' => $c->id,
					'size' => 'M',
					'quanlity' => $c->qty,
					'total' => $c->price
				];
				BillsCModel::insert_detail_bill($data);
			}
			Cart::destroy();
			return view('cart.book');
		}

	}
}