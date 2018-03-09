<?php

namespace App\Http\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class SizesQModel extends Model
{
	
	public static function get_sizes_by_productid($id) {
		return DB::table('sizes')->where('product_id',$id)->get();
	}
	
}