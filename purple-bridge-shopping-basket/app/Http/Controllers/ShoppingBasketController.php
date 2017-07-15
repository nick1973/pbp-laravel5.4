<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingBasketController extends Controller
{
    public function index(){
        return view('shopping_basket.index');
    }

}
