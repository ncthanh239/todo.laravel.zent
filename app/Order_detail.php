<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $fillable = ['product_id', 'quality', 'size_id', 'color_id', 'user_id'];
    public static function store ($data){
    	$orde_detail=Order_detail::create($data);
    	return $orde_detail;   	
    }
}
