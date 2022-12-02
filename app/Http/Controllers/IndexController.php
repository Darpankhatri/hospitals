<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\message;
use App\Models\User;
use App\Models\subscribe;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    //

    public function invoice_check()
    {
        return view('web.pages.invoice');
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

        return view('web.pages.register')->with('title','Register');
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
        $product = product::where('is_active',1)->where('is_deleted',0)->paginate(8);
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
        // return $req;
        $data = subscribe::where('email',$req->email)->first();
        // return $data;
        if(!$data){
            $sub = new subscribe;
            $sub->email = $req->email;
            $sub->save();

            return back()->with('message','Subscribed');
        }
        return back()->with('error','Enter Email First!');
    }

    // api
    public function page()
    {
        $product = product::where('is_active',1)->where('is_deleted',0)->get();
        return response()->json($product);
    }
    public function page_detail($id)
    {
        $product = product::where('id',$id)->where('is_active',1)->where('is_deleted',0)->first();
        return response()->json($product);
    }

    public function product_create(Request $req)
    {

        $product = new product;
        if($req->id){
            $product = product::where('id',$req->id)->where('is_active',1)->where('is_deleted',0)->first();
        }
        $product->name = $req->name;
        $product->image = $req->image;
        $product->price = $req->price;
        $product->stock = $req->stock;
        $product->description = $req->description;
        $product->save();

        if($req->id){

            return response()->json(['message'=>"Updated Successfully",'status'=>1]);
        }
        return response()->json(['message'=>"Inserted Successfully",'status'=>1]);
    }

    public function product_delete($id)
    {
        $product = product::where('id',$id)->where('is_active',1)->where('is_deleted',0)->first();
        if($product){
            $product->is_active = 0;
            $product->save();

            return response()->json(['message'=>"Deleted Successfully",'status'=>1]);
        }
        return response()->json(['message'=>"Product Not Found!",'status'=>0]);
    }
}
