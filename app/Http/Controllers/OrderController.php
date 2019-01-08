<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Attribute;
use App\Value;
use App\Color;
use App\Size;
use App\Product_image;
use App\Color_size;
use Yajra\Datatables\Datatables;
use Gloudemans\Shoppingcart\Facades\Cart;
class OrderController extends Controller
{
	public function listorder(){

		return view('admin_order.listorder');	
	}

	public function Order(){
		
	}
}
