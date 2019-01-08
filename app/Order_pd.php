<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_pd extends Model
{
     protected $fillable = ['code', 'status', 'user_id', 'address', 'phone', 'name', 'email'];

      public static function store ($data){
    	$order_pd=Order_pd::create($data);
    	return $order_pd;   	
    }
}
