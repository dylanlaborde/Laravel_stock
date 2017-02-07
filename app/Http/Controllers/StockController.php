<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;

class StockController extends Controller
{
   public function getIndex(){
  	$product=Stock::all();
return view('table_stock',['produit'=>$product]);
  }
}
