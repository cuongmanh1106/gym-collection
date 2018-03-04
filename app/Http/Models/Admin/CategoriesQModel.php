<?php

namespace App\Http\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class CategoriesQModel extends Model
{
	public static function get_cates() {
		return DB::table('categories')->get();
	}

	public static function get_cate_by_parentid($id) {
		return $result =  DB::table('categories')->where('parent_id','=',$id)->get();
		
	}

	public static function get_cate_by_id($id) {
		$result = DB::table('categories')->where('id',$id)->get();
		if(empty($result[0])) {
			return false;
		}
		return $result[0];
	}

}