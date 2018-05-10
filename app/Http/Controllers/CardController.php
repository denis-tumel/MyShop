<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Product;
class CardController extends Controller
{
	private $products;
	private $counts;
	private $summa;

	public function __construct(){
		// $this->middleware('auth');
	}

   public function getIndex(){
   	$this->cookie();	

  		return view('card')->with('products', $this->products)->with('counts', $this->counts)->with('summa', $this->summa);
   }

	private function cookie(){
		if(isset($_COOKIE['basket'])){
			$products = [];
			$counts = [];
			$summa = 0;
    		$cookie = $_COOKIE['basket'];
    		$arr = explode(',', $cookie);
    		foreach($arr as $key){
    			if($key){
    			$arr_prod = explode(':', $key);
    			$id = $arr_prod[0];
    			$obj = Product::find($id);
    			$products[$id] = $obj;
    			$counts[$id] = $arr_prod[1];
    			//$arr_prod[0], id 
    			//dd($arr_prod);
    			}
    		}
    		$this->products = $products;
    		$this->counts = $counts;
    		//dd($products, $counts);
   	}
	}
}