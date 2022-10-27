<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\message;
use App\Models\subscribe;

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

    public function send_message(Request $req)
    {

        $message = new message;

        $message->name = $req->name;
        $message->email = $req->email;
        $message->phone = $req->phone;
        $message->subject = $req->subject;
        $message->message = $req->message;

        

        $message->save();

        return back()->with('message','Message Send Successfully');
    }

    public function subscribe(Request $req)
    {
        // if($req->email){
        //     $sub = new subscribe;
        //     $sub->email = $req->email;
        //     $sub->save();

        //     return back()->with('message','Subscribed');
        // }
        return back()->with('error','Enter Email First!');
    }

    // api
    public function page()
    {
        return response()->json(["hello"=>"hi"]);
    }
}
