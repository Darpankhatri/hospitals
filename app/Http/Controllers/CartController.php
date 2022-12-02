<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\order;
use App\Models\orderitem;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


use function PHPUnit\Framework\isEmpty;

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

    public function user_logout()
    {
        Auth::logout();
        return redirect()->route('web.index')->with('message','Logout Successfully!');
    }
    
    public function cart()
    {
        if(count(Auth::user()->cart) == 0){
            return redirect()->back()->with('error','Cart Is Empty');
        }
        $cart = Auth::user()->cart;
        return view('web.pages.cart',compact('cart'))->with('title','cart');
    }

    public function checkout()
    {
        if(count(Auth::user()->cart) == 0){
            return redirect()->back()->with('error','Cart Is Empty');
        }
        $cart = Auth::user()->cart;
        $total = 0;
        foreach($cart as $data){
            $total += $data->quantity * $data->product->price;
        }
        return view('web.pages.check-out',compact('total'))->with('title','Checkout');
    }

    public function add_cart(Request $req)
    {
        $cart = cart::where('product_id',$req->product_id)->where('user_id',Auth::user()->id)->first();
        if($cart)
        {
            $cart->quantity = $req->quantity;
            $cart->save();
            return response()->json(['message','Cart Updated Successfully']);
        }
        else{
            $cart = new cart;
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $req->product_id;
            $cart->quantity = $req->quantity;
            $cart->save();
            return response()->json(['message','Add in cart']);
        }
    }

    public function del_cart($id)
    {
        $cart = cart::where('product_id',$id)->where('user_id',Auth::user()->id)->first();
        if($cart){
            $cart->delete();
            return redirect()->back()->with('message','Deleted Successfully!');
        }
        
        return redirect()->back()->with('error','Product Not Found!');
    }

    public function place_order(Request $req)
    {
        $validate = Validator::make($req->all(),[
            'name'=> 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput()->with('warning','Data Requirements not Match!');
        }

        $cart = Auth::user()->cart;
        $total = 0;
        foreach($cart as $data){
            $total += $data->quantity * $data->product->price;
        }

        $order = new order;
        $order->user_id = Auth::user()->id;
        $order->name = $req->name;
        $order->email = $req->email;
        $order->phone = $req->phone;
        $order->total = $total;
        $order->address = $req->address;
        $order->city = $req->city;
        $order->state = $req->state;
        $order->zip = $req->zip;
        $order->save();

        foreach($cart as $data){
            $order_item = new orderitem;
            $order_item->user_id = Auth::user()->id;
            $order_item->order_id = $order->id;
            $order_item->product_id = $data->product_id;
            $order_item->quantity = $data->quantity;
            $order_item->price = $data->product->price;
            $order_item->save();

            $product = product::where('id',$data->product_id)->first();
            $product->stock = $product->stock - $data->quantity;
            $product->save();

            $data->delete();

        }

        $order_item = $order->items;
        Mail::send('web.pages.invoice',['order'=>$order,'order_item'=>$order_item],function($message) use($order){
            $message->to($order->email);
            $message->subject("Order Placed Successfully");
        });

        return redirect()->route('web.index')->with('message','Order Placed Successfully');


    }

}
