<?php

namespace App\Http\Controllers;
use App\Models\subscribe;
use App\Models\message;
use App\Models\order;
use App\Models\product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\orderitem;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function Check_api()
    {
        $user = User::all();
        return response()->json($user);
    }


    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function admin_login(Request $req)
    {
        $validate = Validator::make($req->all(),[
            'email' => 'required|email|exists:users',
            'password' => 'required|min:8',
        ]);
        if($validate->fails()){
            return response()->json(['message'=>"Account Not Found",'status'=>0]);
        }

        $user = User::where('email',$req->email)->where('role_id',1)->first();
        if($user)
        {
            if(Hash::check($req->password,$user->password)){
                return response()->json(['message'=>"Login Successfully",'status'=>1]);
            }
            return response()->json(['message'=>"Password Not Match",'status'=>0]);
        }
        return response()->json(['message'=>"Account Not Found",'status'=>0]);
    }



    public function product()
    {
        $product = product::where('is_active',1)->where('is_deleted',0)->get();
        return response()->json($product);
    }
    public function product_detail($id)
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




    public function subscribe(Request $req)
    {
        $validate = Validator::make($req->all(),[
            'email' => 'required|string|email|max:255|unique:subscribe',
        ]);
        if($validate->fails()){
            return response()->json(['status'=>'0','message'=>$validate->errors()]);
        }

        $sub = new subscribe;
        $sub->email = $req->email;
        $sub->save();

        return response()->json(['status'=>'1','message'=>"Added Successfully"]);
        
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

    public function get_message()
    {
        $message = message::where('is_active',1)->where('is_deleted',0)->get();
        return response()->json($message);

    }

    public function get_subscribe()
    {
        $get_subscribe = subscribe::where('is_active',1)->where('is_deleted',0)->get();
        return response()->json($get_subscribe);

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

    public function get_orders()
    {
        $order = order::all();
        return response()->json($order);
    }
}
