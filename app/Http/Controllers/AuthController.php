<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;
use App\Models\order;
use App\Models\orderitem;
use App\Models\product;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function me(Request $request)
    {

        return Auth::user();
    }

    public function cart(Request $req)
    {
        $body = '';
        if(count(Auth::user()->cart) == 0){
            return response()->json(['Status'=>0,'message'=>'Cart Empty']);
        }
        $cart = Auth::user()->cart;
        $total = 0;
        foreach($cart as $data){
            $total += $data->quantity * $data->product->price;
            $body .= '<tr>
                        <td class="trash">
                            <a data-id="'.$data->product->id.'" href="javascript:void();" class="remove remove-to-cart">
                                <i class="ri-delete-bin-7-line"></i>
                            </a>
                        </td>
                        <td class="product-thumbnail">
                            <a href="javascript:void();">
                                <img src="'.asset($data->product->image).'" alt="Image">
                            </a>
                        </td>

                        <td class="product-name">
                            <a href="javascript:void();">'.$data->product->name.'</a>
                        </td>

                        <td class="product-price">
                            <span class="unit-amount">$'.$data->product->price.'.00</span>
                        </td>

                        <td class="product-quantity">
                            <div class="input-counter">
                                <span class="minus-btn">
                                    <i class="ri-subtract-line"></i>
                                </span>

                                <input id="product-qnt" type="text" value="'.$data->quantity.'"
                                    min="1" max="'.$data->product->stock.'">

                                <span class="plus-btn">
                                    <i class="ri-add-line"></i>
                                </span>
                            </div>
                        </td>

                        <td class="product-subtotal">
                            <span
                                class="subtotal-amount">$'.$data->quantity * $data->product->price.'.00</span>
                                
                        </td>

                        <td class="product-update">
                            <a data-id="'.$data->product->id.'" href="javascript:void();" class="add-to-cart"><i
                                    class="fa-duotone fa-pen-to-square"></i></a>
                        </td>
                    </tr>';
        }
        return response()->json(['Status'=>1,'body'=>$body,'total'=>$total]);
    }
    
    public function add_cart(Request $req)
    {
       $cart = cart::where('product_id',$req->id)->where('user_id',Auth::user()->id)->first();
        if($cart)
        {
            $cart->quantity = $req->quantity;
            $cart->save();
            return response()->json(['Status'=>2,'message'=>'Cart Updated Successfully']);
        }
        else{
            $cart = new cart;
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $req->id;
            $cart->quantity = $req->quantity;
            $cart->save();
            return response()->json(['Status'=>1,'message'=>'Add in cart']);
        }
    }


    public function del_cart(Request $req)
    {
        $cart = cart::where('product_id',$req->id)->where('user_id',Auth::user()->id)->first();
        if($cart){
            $cart->delete();
            return response()->json(['Status'=>1,'message'=>'Deleted Successfully!']);
        }
        
        return response()->json(['Status'=>0,'message'=>'Product Not Found!']);
        
    }

    public function checkout(Request $req)
    {
        if(count(Auth::user()->cart) == 0){
            return response()->json(['Status'=>0,'message'=>'Cart Empty']);
        }
        $cart = Auth::user()->cart;
        $total = 0;
        foreach($cart as $data)
        {
            $total += $data->quantity * $data->product->price;
        }
        
        return response()->json(['Status'=>1,'total'=>$total]);
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
            return response()->json(['Status'=>0,'message'=>'Data Requirements not Match!']);
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

        return response()->json(['Status'=>1,'message'=>'Order Placed Successfully']);


    }


    public function logout(Request $request)
    {
        return response()->json($request->user()->tokens()->delete());
    }
}
