<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function cart()
    {
        return view('web.pages.cart')->with('title','cart');
    }

    public function checkout()
    {
        return view('web.pages.check-out')->with('title','Checkout');
    }

    public function add_cart(Request $req)
    {
        return response()->json(['message','Add in cart']);
    }
}
