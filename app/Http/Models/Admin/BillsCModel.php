<?php

namespace App\Http\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class BillsCModel extends Model
{
	
	public static function insert_bill($data) {
		return DB::table('bills')->insertGetId($data);
	}

	public static function insert_detail_bill($data) {
		return DB::table('details_bill')->insert($data);
	}

	public static function update_bills($id,$data) {
		return DB::table('bills')->where('id',$id)->update($data);
	}

	
}