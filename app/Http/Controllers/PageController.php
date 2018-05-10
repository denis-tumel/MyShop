<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;
use App\product;

class PageController extends Controller
{

	public function __construct(){
		$this->middleware('mymiddle');
	}
   public function getIndex($id = 0){
   	if($id > 9){
   		$id == 9;
   	}
    	$products = Product::where("catalog_id", $id)->paginate(6);
    		$obj = Catalog::find($id);
    		//dd($products);
   		return view('page', compact('obj', 'products'));
   }
}
