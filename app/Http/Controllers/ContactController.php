<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
   public function getIndex(){
   	// print_r($request->all());
   	return view('contact');
   }
   public function postIndex(){
   	// print_r($request->all());
   	$mail = 'denis.tumel@mail.ru';
   	$thema = 'сообщение пользователей сайта';
   	$body = $_POST['text'];
   	$headers = NULL;
   	mail($mail, $thema, $body, $headers);
   	return view('contact');
   }
}
