<?php

namespace App\Http\Controllers;
use App\Models\subscribe;
use App\Models\message;
use App\Models\product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
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

    
    public function add_cart(Request $req)
    {
       
        return response()->json(['status'=> 1,'message'=>"Cart added"]);
    }

    public function update_cart(Request $req)
    {
        return response()->json(['success'=>'Updated']);
    }

    public function delete_cart(Request $req)
    {
        
        return response()->json(['success'=>'Deleted']);
        
    }

    public function subscribe(Request $req)
    {
        $data = subscribe::where('email',$req->email)->first();
        
        if(!$data){
            $sub = new subscribe;
            $sub->email = $req->email;
            $sub->save();

            return response()->json(['status'=>'1','message'=>"Added Successfully"]);
        }
        return response()->json(['status'=>'0','message'=>"Already added"]);
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
