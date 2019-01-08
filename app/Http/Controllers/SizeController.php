<?php

namespace App\Http\Controllers;
use App\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public $sizes;
    public function __construct(){
    	$this->$size = new Size;
    }
}
