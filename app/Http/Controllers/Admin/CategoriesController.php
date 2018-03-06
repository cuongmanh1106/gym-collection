<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Models\Admin\CategoriesQModel;
use App\Http\Models\Admin\CategoriesCModel;
use App\Http\Models\Admin\ProductsQModel;
use Illuminate\Http\Request;
use App\Http\Requests\categoriesRequest;

class CategoriesController extends Controller {
    
	/**
     * Show list and search products.
     *
     * @return Response
     */

    public function index() {

    	$cates = CategoriesQModel::get_cates();
    	$data = array(
    		'cates' => $cates
    	);
    	return view('admin.categories.list')->with($data);
    }

    /**
     * Show form create product.
     *
     * @return Response
     */
    public function create() {
        $cates = CategoriesQModel::get_cates();
        $data = array(
            'cates' => $cates
        );
    	return view('admin.categories.create')->with($data);
    }

    /**
     * Store a new products.
     *
     * @param Request $request
     * @return Response
     */

    public function store(categoriesRequest $request) {

    	$data = [
    		'name' => $request->name,
    		'alias' => changeTitle($request->name),
    		'parent_id' => $request->parent_id,
    		'description' => $request->description
    	];

    	if(CategoriesCModel::insert_cate($data)) {
    		$request->session()->flash('alert-success',"Success");
    		return back();
    	} else {
    		$request->session()->flash('alert-danger','Fail');
    		return view('users.list');
    	}

    }

    /**
     * Edit a product.
     *
     * @param id
     * @return Response
     */

    public function edit($id) {

        $cate = CategoriesQModel::get_cate_by_id($id);
        $cates = CategoriesQModel::get_cates();
        $data = array(
            'cate' => $cate,
            'cates' => $cates
        );
        return view('admin.categories.edit')->with($data);
    }

    /**
     * Update a product.
     *
     * @param product_id
     * @return Response
     */
    public function update($id, categoriesRequest $request) {
        $data = [
            'name'=>$_POST['name'],
            'alias' => changeTitle($_POST['name']),
            'parent_id' => $_POST['parent_id'],
            'description'=>$_POST['description']
        ];

        if(CategoriesCModel::update_cate($id,$data)) {
            $request->session()->flash('alert-success','Success');
            return redirect()->route('admin.categories.list');
        } else {
            $request->session()->flash('alert-danger','Fail');
            return back();
        }
    }

    /**
     * delete a product.
     *
     * @param product_id
     * @return Response
     */

    public function delete($id , Request $request) {
        $count = count(CategoriesQModel::get_cate_by_parentid($id));
        $count_product = count(ProductsQModel::get_products_by_cateid($id));
        if($count == 0  && $count_product== 0) {
            if(CategoriesCModel::delete_cate($id)) {
                $request->session()->flash('alert-success','Success');
                return back();
            } else {
                $request->session()->flash('alert-danger','Fail');
                return back();
            }
        } else if ($count != 0) {
            $request->session()->flash('alert-warning','You must delete children first!!!');
            return back();
        } else if ($count_product != 0) {
            $request->session()->flash('alert-warning','This category had product in it!!!');
            return back();
        }
    }

    public function show_products($id) {
        $products = ProductsQModel::get_products_by_cateid($id);
        $data = [
            'products' => $products
        ];
        return view('admin.products.list')->with($data);
    }

    public function search() {
        $value = $_GET["value"];
        $cates = CategoriesQModel::search_cate($value);
        $data = [
            'cates' => $cates
        ];
        return view('admin.categories.search')->with($data);
    }
    
}