<?php

namespace App\Http\Controllers;
use App\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public $colors;
    public function __construct(){
    	$this->$color = new Color;
    }
}
