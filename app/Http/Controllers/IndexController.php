<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\message;
use App\Models\order;
use App\Models\User;
use App\Models\subscribe;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\orderitem;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    //

    public function invoice_check()
    {
        $order = order::first();
        $order_item = $order->items;
        Mail::send('web.pages.invoice',['order'=>$order,'order_item'=>$order_item],function($message) use($order){
            $message->to($order->email);
            $message->subject("Order Placed Successfully");
        });
        return redirect()->route('web.index');
        // return view('web.pages.invoice',compact('order','order_item'));
    }

    public function web_register()
    {
        if(Auth::check()){
            return redirect()->back();
        }
        return view('web.pages.register')->with('title','Register');
    }

    public function user_register(Request $req)
    {
        if(Auth::check()){
            return redirect()->back();
        }
        $validate = Validator::make($req->all(),[
            'name'=> 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput()->with('warning','Data Requirements not Match!');
        }

        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->route('web.login')->with('message','Account Created Successfully');
    }

    public function web_login()
    {
        return view('web.pages.login')->with('title','Login');
    }

    public function user_login(Request $req)
    {
        $validate = Validator::make($req->all(),[
            'email' => 'required|email|exists:users',
            'password' => 'required|min:8',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput()->with('warning','Data Requirements not Match!');
        }

        $user = User::where('email',$req->email)->first();
        if(Hash::check($req->password,$user->password)){
            Auth::loginUsingId($user->id);
            return redirect()->route('web.index')->with('message','Login Successfully');
        }
        return back()->with('error','InValid User Detail!');
    }


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


    public function product()
    {
        // $product = product::where('is_active',1)->where('is_deleted',0)->paginate(8);
        $product = product::where('is_active',1)->where('is_deleted',0)->get();
        return view('web.pages.product',compact('product'))->with('title','Products');
    }

    public function product_detail($id)
    {
        $product = product::where('id',$id)->where('is_active',1)->where('is_deleted',0)->first();
        return view('web.pages.product-detail',compact('product'))->with('title','Product Detail');
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
        $validate = Validator::make($req->all(),[
            'email' => 'required|string|email|max:255|unique:subscribe',
        ]);
        if($validate->fails()){
            return back()->with('error',$validate->errors('email'));
        }
        
        $sub = new subscribe;
        $sub->email = $req->email;
        $sub->save();

        return back()->with('message','Subscribed');
        
    }

    // api
    

    
}
