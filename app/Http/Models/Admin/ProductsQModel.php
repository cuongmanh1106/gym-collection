<?php

namespace App\Http\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ProductsQModel extends Model
{
	public static function get_products_paging($pages) {
		return DB::table('products')->paginate($pages);
	}

	public static function get_product_by_id($id) {
		$result = DB::table('products')->where('id',$id)->get();

		if(empty($result[0])) {
			return false;
		}
		return $result[0];
	}

	public static function get_products_by_cateid($cate_id) {
		return DB::table('products')->where('cate_id','=',$cate_id)->get();
	}
}