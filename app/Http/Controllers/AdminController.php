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

    function delete(Request $request, $id){
        $data = [
            'status' => 1
        ];
        DB::table('users')->where('id', $request->id)
            ->update($data);
        return redirect()-> route('admin.account');
    }

    function edit(Request $request, $id){
        $data = [
            
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            'phone' => $request->phone,
            'level' => $request->level
        ];
        
        DB::table('users')->where('id', $request->id)
            ->update($data);
        return redirect()-> route('admin.account');
    }
    


    
}
