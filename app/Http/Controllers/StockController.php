<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;

class StockController extends Controller
{
   public function getIndex(){
  	
  	dd(Stock::all());
  }
}
