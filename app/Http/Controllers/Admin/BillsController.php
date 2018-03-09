<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Models\Admin\BillsQModel;
use App\Http\Models\Admin\BillsCModel;
use App\Http\Models\Admin\ProductsQModel;
use Illuminate\Http\Request;
use App\Http\Requests\categoriesRequest;

class BillsController extends Controller {

	public function index() {
		$bills = BillsQModel::get_bills_paging(5);
		$count_status_by_zero = count(BillsQModel::get_status_not_complete());
		$data = [
			'bills' => $bills,
			'count_status_by_zero' => $count_status_by_zero
		];

		return view('admin.bills.list')->with($data);
	}

	public function detail($id) {
		$details = BillsQModel::get_detail_by_id($id);
		$data = [
			'details' => $details
		];
		$data_update = [
			'status' => 1
		];
		BillsCModel::update_bills($id , $data_update);
		return view('admin.bills.detail')->with($data);
	}

}