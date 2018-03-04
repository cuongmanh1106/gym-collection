<?php

namespace App\Http\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class CategoriesCModel extends Model
{
	public static function insert_cate($data) {
		return DB::table('categories')->insert($data);
	}

	public static function update_cate($id,$data) {
		return DB::table('categories')->where('id',$id)->update($data);
	}
	public static function delete_cate($id) {
		return DB::table('categories')->where('id',$id)->delete();
	}
}