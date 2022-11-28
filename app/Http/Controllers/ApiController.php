<?php

namespace App\Http\Controllers;
use App\Models\subscribe;
use App\Models\message;
use App\Models\product;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //

    public function add_cart(Request $req)
    {
        $id = $req->product_id;
        if (session()->has('cart')) {
            return response()->json(['status'=> 0,'message'=>" added"]);
            $cart = session()->get('cart');
        }
        $cart[$id]['product_id'] = $req->product_id;
        $cart[$id]['quantity'] = $req->quantity;
        session()->put('cart', $cart);
        return response()->json(['status'=> 1,'message'=>"Cart added"]);
    }

    public function update_cart(Request $req)
    {
        $cart = session()->get('cart', []);
        $id = $req->product_id;

        $cart[$id]["quantity"] = $req->quantity;
        $cart[$id]["type"] = $req->type;

        session()->put('cart', $cart);
        return response()->json(['success'=>'Updated']);
    }

    public function delete_cart(Request $req)
    {
        $cart = session()->get('cart');

        unset($cart[$req->product_id]);
        if(empty($cart)){
            session()->forget('cart');
            return response()->json(['success'=>'Deleted','message'=>'empty']);
        } else{
            session()->put('cart', $cart);
            return response()->json(['success'=>'Deleted']);
        }
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

            return response()->json(['status'=>'1','message'=>"Added Successfully"]);
            // return back()->with('message','Subscribed');
        }
        return response()->json(['status'=>'0','message'=>"Already added"]);
        // return back()->with('error','Enter Email First!');
    }

    public function message(Request $req)
    {

        $message = new message;

        $message->name = $req->name;
        $message->email = $req->email;
        $message->phone = $req->phone;
        $message->subject = $req->subject;
        $message->message = $req->message;

        

        $message->save();

        return response()->json(['status'=>'1','message'=>"Message Send Successfully"]);
        return back()->with('message','Message Send Successfully');
    }

    public function auth_token()
    {
        $AuthToken = $_SERVER['HTTP_AUTHORIZATION'];
        return response()->json(['tocken'=>$AuthToken]);
    }

    
    public function products()
    {
        $product = product::where('is_active',1)->where('is_deleted',0)->get();
        $body = '';
        foreach($product as $data)
        {
            $body .= '<div class="col-lg-3 col-sm-6">
                         <div class="single-product">
                             <div class="product-img">
                                 <img src="'.asset($data->image).'" alt="Image">
                                 <div class="add-cart">
                                     <a data-id="'.$data->id.'" href="javascript:void()" class="default-btn add-to-cart">Add to cart</a>
                                 </div>
                             </div>
     
                             <div class="product-content">
                                 <ul>
                                     <li>
                                         <i class="ri-star-fill"></i>
                                     </li>
                                     <li>
                                         <i class="ri-star-fill"></i>
                                     </li>
                                     <li>
                                         <i class="ri-star-fill"></i>
                                     </li>
                                     <li>
                                         <i class="ri-star-fill"></i>
                                     </li>
                                     <li>
                                         <i class="ri-star-fill"></i>
                                     </li>
                                 </ul>
     
                                 <h3>
                                     <a href="javascript:void();">'.$data->name.'</a>
                                 </h3>
     
                                 <span>$'.$data->price.'.00</span>
                             </div>
                         </div>
                     </div>'; 

        }
        return response()->json(['body' =>$body]);
    }
}
