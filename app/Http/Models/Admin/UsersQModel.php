<?php

namespace App\Http\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class UsersQModel extends Model
{
	public static function get_users_paging($pages) {
		$result = DB::table('users')->paginate($pages);
		return $result;
	}
	public static function get_user_by_id($id) {
		$result = DB::table('users')->where('id','=',$id)->get();
		if(empty($result[0])) {
			return FALSE;
		}
		return $result[0];
	}
	public static function get_users_by_role($pages,$id) {
		$user = UsersQModel::get_user_by_id($id);
		return DB::table('users')->where('role','<=',$user->role)->paginate($pages);
	}

	public static function get_permission($role) {
		return DB::table('permission')->where('id','<=',$role)->get();
	}

	

	
}