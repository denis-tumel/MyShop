<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class lolController extends Controller
{
   public function getOne($id = null){
   	$obj = Course::find($id);
   	return view('lol', compact('obj'));
   }
}
