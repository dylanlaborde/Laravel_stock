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

// Route::get('/', function () {
//     return view('table_stock');
// });


Route::get('/','StockController@getIndex');
Route::get('/show_detail/{id}','StockController@getDetail');
Route::get('/edit_stock/{id}','StockController@getEdit');
Route::post('/edit_stock/{id}','StockController@saveEdit');


Route::post('/sell/{id}','StockController@postSell');
Route::post('/refill/{id}','StockController@postRefill');