<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function account(){
        $users = DB::table('users')->get();
        return view('Admin.modun.account',['user'=>$users]);
    }
    function modify($id){
        $user = DB::table('users')->where('id',$id)->first();
        return view ('Admin.modun.detail', compact('user'));
    }
    function delete($id){
        $user = DB::table('users')->where('id',$id)->delete();
        return view ('Admin.modun.detail', compact('user'));
    }
    function edit($id){
        $user = DB::table('users')->where('id',$id)->delete();
        return view ('Admin.modun.detail', compact('user'));
    }


    
}
