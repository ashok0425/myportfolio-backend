<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{



    public function Login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
   
        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }else{

        }
    }



    public function dashboard()
    {
       return view('admin.dashboard');
    }

    
}