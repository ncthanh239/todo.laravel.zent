<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_image extends Model
{
    protected $fillable = ['product_id','link_image', 'size_id','color_id'];
}
