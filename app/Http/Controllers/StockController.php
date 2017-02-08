<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;

class StockController extends Controller
{
	public function getIndex(){
		$product=Stock::all();
		return view('stocks.table_stock',['produit'=>$product]);
	}
	public function getDetail($id){
		$detail=Stock::find($id);
		return view('stocks.show',['details'=>$detail]);
	}
	public function postSell($id){

		$detail=Stock::find($id);
		$detail->stock--;
		$detail->save();
		return back();
	}
	public function postRefill($id){
		
		$detail=Stock::find($id);
		$detail->stock++;
		$detail->save();
		return back();

	}
}
