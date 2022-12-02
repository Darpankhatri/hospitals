<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function me(Request $request)
    {

        return Auth::user();
    }

    public function logout(Request $request)
    {
        
        return response()->json($request->user()->tokens()->delete());
    }
}
