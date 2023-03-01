<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;

class Product extends Controller
{
    public function baskets() {
       $p=Basket::all();
       $p[0]->products->all();
       return view('basket', compact('p'));
    }
}
