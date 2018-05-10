<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
class SearchController extends Controller
{
    public function getIndex(){

    	$search = $_GET['search'];
    	if($search!=''){
    		$names = Product::where('name', 'like', '%'.$search.'%')->get();
    	    	return view('search', compact('names'));
    	    }
    	    else{
    	    	return redirect()->back();
    	    }
    	// $names = Product::where('name', 'like', '%'.$search.'%')->get();
    	//dd($names);

    }
}
