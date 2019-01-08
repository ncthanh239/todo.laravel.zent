<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['code', 'status', 'user_id', 'address', 'phone', 'name', 'email'];

      public static function store ($data){
    	$order=Order::create($data);
    	return $order;   	
    }
}
