<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_image;

class ProductImgController extends Controller
{	

		public function create($id){
			$product=Product::find($id);
			return view('admin_shoes.list',['product'=>$product]);
		}
	   public function upload(Request $request){
	   	
	   		$path=$request->file->storeAs('products', 'image_'. time().'.png');

	   		Product_image::insert([
	   			'product_id'=>$request->product_id,
	   			'link_image'=>$path,
	   			'color_id'=>$request->color_id,
	   			'size_id'=>$request->size_id,
	   		]);

	   		return response()->json('ok');
	   }
}
