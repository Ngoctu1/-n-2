<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;
use Cart;
use Illuminate\Http\Request;

class userController extends Controller
{
    function index(){
        
        $user = DB::table('users')->get();
        dd($user);

    }
    function detail($id){
        $user = DB::table('users')->where('id',$id)->first();
        return view ('users.detail', compact('user'));
    }
      
    function create(){
        Cart::add('3', 'ha', 1, 130, 550 );
        
        Cart::add('4', 'hahao', 2, 15, 550 );

       return redirect()->route('users.cart1')->withSuccess('Product has been successfully added to the Cart.');
    }
    

    function prd_detail($id){
        $product = DB::table('prd_detail')
        ->where('prd_id',$id) 
        ->first();
        return view ('users.modun-user.productdetail',compact('product'));
    }
    
    function product(){

        $product = DB::table('product')
            ->join('prd_detail', 'product.prd_id', '=', 'prd_detail.prd_id')
                //->groupBy('prd_id')
            ->get();
        //SELECT * FROM `product` INNER JOIN `prd_detail` ON product.prd_id = prd_detail.prd_id GROUP BY product.prd_id
        return view('users.modun-user.product',['prd'=>$product]);
    }
}
