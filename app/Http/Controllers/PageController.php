<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;
use App\product;
class PageController extends Controller
{
    public function getIndex($id = 0){
    	$products = Product::where("catalog_id", $id)->get();
    		$obj = Catalog::find($id);
    		//dd($products);
    		return view('page', compact('obj', 'products'));
    }
}
