<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function account(){
        $users = DB::table('users')->get();
        return view('Admin.modun.account',['users'=>$users]);
    }
    


    
}
