<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;
use Cart;
use Illuminate\Http\Request;

class userController extends Controller
{
   function order(){
        $orders = DB::table('orders')
            ->join('order_items', 'orders.id', '=', 'order_items.order_id')
            ->where('orders.user_id',Auth::user()->id)
            ->groupBy('orders.id')
            ->get();

        return view('users.modun-user.order',['orders'=>$orders]);
   }
   
   function orderdetail($id){
        $orders = DB::table('orders')
            ->join('order_items', 'orders.id', '=', 'order_items.order_id')
            ->join('product_details','order_items.product_id','=','product_details.prd_detail_id')
            ->join('products','products.prd_id','=','product_details.prd_id')
            ->where('orders.user_id',Auth::user()->id)
            ->where('orders.id',$id)
            ->get();

        return view('users.modun-user.orderdetail',['orders'=>$orders]);
   }

    
    
    
    
    

}
