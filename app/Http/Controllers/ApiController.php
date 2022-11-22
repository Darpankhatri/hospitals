<?php

namespace App\Http\Controllers;
use App\Models\subscribe;
use App\Models\message;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
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
}
