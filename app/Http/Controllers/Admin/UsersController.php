<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Models\Admin\UsersQModel;
use App\Http\Requests\usersRequest;
use App\Http\Requests\usersRequest_update;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller {
	public function __construct() {
    }
    
    public function index(Request $request) {
    	$users = UsersQModel::get_users_by_role(5,Auth::user()->id);
    	$data = array(
    		'users'=>$users
    	);
    	return view('admin.users.list')->with($data);
    }

    /**
     * Show form create a user.
     *
     * @return Response
     */

    public function create()
    {
        $roles = UsersQModel::get_permission(Auth::user()->role);
        $data = array(
            'roles' => $roles
        );
    	return view('admin.users.create')->with($data);
    }

    /**
     * Store a new user.
     *
     * @param Request $request
     * @return Response
     */

    public function store(usersRequest $request) {
    	 if (User::create(array('name'=>$request->name,'email'=>$request->email,'role'=>$request->role,'password'=>Hash::make($request->password)))) {
            $request->session()->flash('alert-success',"Success");
            return redirect()->back();
        } else {
            $request->session()->flash('alert-danger',"Fail");
            return redirect()->back();
        }
    }

    /**
     * Edit a users.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id) {
        $user = User::find($id);
        $roles = UsersQModel::get_permission(Auth::user()->role);
        $data = array(
            'user'=>$user,
            'roles' => $roles
        );
        return view('admin.users.edit')->with($data);
    }

    /**
     * Delete a user.
     *
     * @param int $id
     * @param Request $request
     * @return Response
     */

    public function update($id, usersRequest_update $request) {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        if($user->password != $request->password) {
            $user->password = hash::make($request->password);
        }
        $user->save();
        $request->session()->flash('alert-success',"Success");
        return redirect()->route('admin.users.list');

    }

    /**
     * Delete a product.
     *
     * @param product_id
     * @param Request $request
     * @return Response
     */
    public function delete($id , Request $request) {
        $user = User::find($id);
        $user->delete();
        $request->session()->flash('alert-success',"Success");
        return back();

    }

    public function logout(Request $request) {
        return view('admin.index')->with(Auth::logout());
    }
}