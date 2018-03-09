<?php

namespace App\Http\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class SizesCModel extends Model
{
	
	public static function insert_size($data) {
		return DB::table('sizes')->insert($data);
	}

	public static function check_insert($proid,$size) {
		return DB::table('sizes')->where('product_id',$proid)->where('size',$size)->get();
	}

	public static function delete_size($id) {
		return DB::table('sizes')->where('id',$id)->delete();
	}
}