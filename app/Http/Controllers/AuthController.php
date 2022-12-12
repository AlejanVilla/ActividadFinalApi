<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function authentication(Request $request)
    {
        return response()->json([
            "token" => "H4l0j4"
            //"data" => $request->all()

           /* $credentials = [
                "email" => $request->email,
                "password" => $request->password
            ];

            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
            }*/
        ]);
    }
}
