<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class CharacterController extends Controller
{
    public function getIndex($id = 0){
    	$obj = Product::find($id);
    	return view('character', compact('obj'));
    }
}
