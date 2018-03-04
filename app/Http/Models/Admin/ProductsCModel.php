<?php

namespace App\Http\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ProductsCModel extends Model
{
	public static function insert_product($data) {
		return DB::table('products')->insertGetId($data);
	}
	public static function update_product($id,$data) {
		return DB::table('products')->where('id',$id)->update($data);
	}
	public static function delete_product($id) {
		return DB::table('products')->where('id',$id)->delete();
	}
}