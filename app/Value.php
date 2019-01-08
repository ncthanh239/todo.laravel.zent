<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
   	protected $fillable = ['value','attribute_id', 'product_id','size_id', 'size' , 'color_id'];
   	protected $casts = [
      'value'=>'integer'  
    ];

     public static function updateData($id,$data){
        $value=Value::find($id);
        $value->update($data);
        return $value;
    }
   	public function attribute()
   	{
   		return $this->belongsTo('App\Attribute','attribute_id','id');
   	}
   	public function product()
   	{
   		return $this->belongsTo('App\Product','product_id','id');
   	}
}
