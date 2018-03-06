<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Models\Admin\CategoriesQModel;
use App\Http\Models\Admin\ProductsQModel;
use App\Http\Models\Admin\ProductsCModel;
use Illuminate\Http\Request;
use App\Http\Requests\productsRequest;
use Carbon\Carbon;

class ProductsController extends Controller {

	/**
     * Show list and search products.
     *
     * @return Response
     */
	public function index() {

		$products = ProductsQModel::get_products_paging(5);
		$data = array(
			'products' => $products
		);

		return view('admin.products.list')->with($data);

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

		return view('admin.products.create')->with($data);

	}
	/**
     * Store a new products.
     *
     * @param Request $request
     * @return Response
     */
	public function store(productsRequest $request) {

		$file = $request->file('image');
		$img_name = $file->getClientOriginalName();

		if($img_name == null) {
			$request->session()->flash('alert-danger','Fail');
			return back();
		}

		//create a new image name
		$new_img = newImage($img_name);
		$data =[
			'name' => $_POST['name'],
			'cate_id' => $_POST['cate_id'],
			'price' => $_POST['price'],
			'intro' => $_POST['intro'],
			'description' => $_POST['description'],
			'image' => $new_img,
			'created_at' => Carbon::now()
		];

		$pro_id = ProductsCModel::insert_product($data);
		if($pro_id!=null) {
			//move file to server
			$file->move("public/img",$new_img);

			$request->session()->flash('alert-success',"Success");
			return back();
		} else {
			$request->session()->flash('alert-danger',"Fail");
			return back();
		}
	}
	/**
     * Edit a product.
     *
     * @param id
     * @return Response
     */
	public function edit($id) {

		$cates = CategoriesQModel::get_cates();
		$product = ProductsQModel::get_product_by_id($id);
		$data = [
			'cates' =>$cates,
			'product' => $product
		];

		return view('admin.products.edit')->with($data);

	}
	/**
     * Update a product.
     *
     * @param product_id
     * @return Response
     */
	public function update($id, productsRequest $request) {
		$product = ProductsQModel::get_product_by_id($id);
		$file = $request->file('image');
		$old_img = $product->image;
		$new_img = $old_img;
		if($file !=null) {
			$new_img = newImage($file->getClientOriginalName());
		}

		$data =[
			'name' => $_POST['name'],
			'cate_id' => $_POST['cate_id'],
			'price' => $_POST['price'],
			'intro' => $_POST['intro'],
			'description' => $_POST['description'],
			'image' => $new_img,
		];

		if(ProductsCModel::update_product($id,$data)) {
			if($old_img != $new_img) {
				if(file_exists(public_path('img/'.$old_img))) {
					unlink(public_path('img/'.$old_img));
				}
				$file->move("public/img/",$new_img);
			}

			$request->session()->flash('alert-success','Success');
			return redirect()->route('admin.products.list');
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

	public function delete($id, Request $request) {
		$product = ProductsQModel::get_product_by_id($id);
		if(ProductsCModel::delete_product($id)) {
			if(file_exists(public_path('img/'.$product->image))) {
				unlink(public_path('img/'.$product->image));
				$request->session()->flash('alert-success','Success');
			} else {
				$request->session()->flash('alert-warning','Fail Remove file');
			}
			return back();

		} else {
			$request->session()->flash('alert-danger','Fail');
			return back();
		}
		
	}

	public function search() {
		$name = $_GET["value"];
		$products = ProductsQModel::search_product_by_name($name);
		$data = [
			'products' => $products
		];
		return view('admin.search_product')->with($data);
	} 
}