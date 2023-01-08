<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    function getlogin(){
        return view('users.login');
    }

    function login(LoginRequest $request){
        $credentials = [
        'email' => $request->email,
        'password' => $request->password
        ];
        if (Auth::attempt($credentials) && Auth::user()->isAdmin()) { 
          return redirect()->route('user.home');  
         }else if (Auth:: attempt($credentials) && !Auth::user()->isAdmin()) {
        
        return redirect()->route('user.home');
        }
        return redirect()->back()->withErrors([
        'login_fail' => 'The provided credentials do not match our records.',
    
        ])->onlyInput('email');
        }

    function signup(Request $request){
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            'phone' => $request->phone,
            'level' => 2,
            'status' => 0
        ]);
        return redirect()-> route('users.login');
    }
}
