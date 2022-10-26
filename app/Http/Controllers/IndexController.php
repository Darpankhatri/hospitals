<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class IndexController extends Controller
{
    //

    public function index()
    {
        return view('web.pages.index')->with('title','Medicoz');
    }

    public function about_us()
    {
        return view('web.pages.about-us')->with('title','About Us');
    }

    public function contact_us()
    {
        return view('web.pages.contact-us')->with('title','Contact Us');
    }

    public function cart()
    {
        return view('web.pages.cart')->with('title','cart');
    }

    public function product()
    {
        $product = product::where('is_active',1)->where('is_deleted',0)->paginate(8);
        return view('web.pages.product',compact('product'))->with('title','Products');
    }
}
