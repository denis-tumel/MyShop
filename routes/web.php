<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',['as' => 'home', 'uses' => 'BaseController@getIndex']);

Auth::routes();

Route::get('/home', 'HomeController@index');
// Route::get('/catalog', 'CatalogController@getCatalog');
Route::get('/error', ['as' => '404', 'uses' =>'ErrorController@Index']);
Route::get('/search', 'SearchController@getIndex');
Route::get('/page/{id}', 'PageController@getIndex');
Route::get('/lol/{id}', 'lolController@getIndex');
Route::get('/card', ['as'=>'card','uses'=>'CardController@getIndex']);
Route::get('/contact', ['uses' => 'ContactController@getIndex', 'as' => 'contact']);
Route::post('/contact', 'ContactController@postIndex');
Route::get('/character/{id}', 'CharacterController@getIndex');
Route::get('{id}', 'StaticController@getIndex');
