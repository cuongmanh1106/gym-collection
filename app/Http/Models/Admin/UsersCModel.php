<?php

namespace App\Http\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class UsersModel extends Model
{
	
	public static function insert_user($data) {
		return DB::table('users')->insert($data);
	}
}