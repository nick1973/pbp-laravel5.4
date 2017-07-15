<?php

namespace App\Http\Controllers;

use App\Baskets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShoppingBasketController extends Controller
{
    public function index(){
        return view('shopping_basket.index');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'item' => 'required',
            'price' => 'required',
            'amount' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }

        Baskets::create($request->all());
        return view('shopping_basket.success');
    }

}
