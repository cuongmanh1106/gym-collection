<?php

namespace App\Http\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class BillsQModel extends Model
{
	
	public static function get_bills_paging($pages) {
		return DB::table('bills')->paginate($pages);
	}

	public static function get_detail_by_id($id) {
		return   DB::table('details_bill')->where('bill_id',$id)->get();
	}

	public static function get_status_not_complete() {
		return DB::table('bills')->where('status',0)->get();
	}

	

	
}