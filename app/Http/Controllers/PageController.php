<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;
use App\product;
class PageController extends Controller
{
    public function getIndex($id = 0){
    		$obj = Catalog::find($id);
    		return view('page', compact('obj'));
    }
}
