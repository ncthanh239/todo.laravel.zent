<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['code','name','price','slug','description','title'];

    public static function store_first ($data){
    	$product=Product::create($data);
    	return $product;   	
    }

    public static function updateData($id,$data){
        $product=Product::find($id);
        $product->update($data);
        return $product;
    }

    public function value(){
    	return $this->hasMany('App\Value','product_id','id');
    }
}
