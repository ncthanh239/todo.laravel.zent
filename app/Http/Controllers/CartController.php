<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Attribute;
use App\Value;
use App\Color;
use App\Size;
use App\Product_image;
use App\Color_size;
use Yajra\Datatables\Datatables;
use Gloudemans\Shoppingcart\Facades\Cart;	
use App\Order_pd;
use App\Order_detail;

class CartController extends Controller
{
	public function getCart(Request $request){
		$data['code']=$request->code_pd;
		$data['user_id']=$request->user_id;
		$data['status']=1;
		$data['name']=$request->user_name;
		$data['email']=$request->user_email;
		$data['phone']=$request->user_phone;
		$data['address']=$request->user_address;
		$order=Order_pd::store($data);

		$array['product_id']=$request->pd_id_check;
		$array['quality']=$request->quality_check;
		$array['color_id']=$request->color_id_check;
		$array['size_id']=$request->size_id_check;
		$array['user_id']=$request->user_id;
		$order_detail=Order_detail::store($array);

		Cart::destroy();
		return response()->json([
			'error'=>false,
			'message'=>'Thanh cong',
		]);
	}

	public function getIdUser($id){
		
		$orders=Order_detail::where('user_id',$id)->get();
			foreach ($orders as $key => $order) {
				$order->name=Product::where('id',$order->product_id)->first()->name;
				$order->image=Product_image::where('product_id', $order->product_id)->where('color_id', $order->color_id)->where('size_id', $order->size_id)->first()->link_image;
				$order->price = Product::where('id',$order->product_id)->first()->price;
				$order->code=Product::where('id',$order->product_id)->first()->code;

			}
		
		return view('userview.detail',['orders'=>$orders]);
	}
	public function cart(Request $request){
		$order=array();
		$orderss=[];
		$order_dt=Order_detail::where('user_id',$request->id_user)->get();
		// dd($order_dt);
		foreach ($order_dt as $key => $value) {
			$product_id=$value->product_id;
			$quality=$value->quality;
			$products=Product::where('id', $product_id)->get();
			$imgs=Product_image::where('product_id',$product_id)->first()->link_image;
			
			$order['product']=$products;
			$order['imgs']=$imgs;
			$order['quality']=$quality;
			
			$orderss[$key]=$order;
			
			
		}
		return  response()->json($orderss);
	}
}
