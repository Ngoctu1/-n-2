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
      //--------------------Cart-----------------------
    function addcart($id){

        $product = DB::table('product')
        ->join('prd_detail', 'product.prd_id', '=', 'prd_detail.prd_id')
        ->where('prd_detail_id',$id)
        ->first() ;

        Cart::add($product->prd_detail_id,$product->prd_name,'1',$product->prd_price,'0',['size'=>$product->prd_size,'color'=>$product->prd_color,'img'=>$product->prd_image]);
        $data = Cart::content();
        

       return view('users.modun-user.cart1');
    }

    function deletecart($id)
    {
        if($id == 'all'){
        Cart::destroy();
        }else{
        Cart::remove($id);
        }
        return back();
    }

    function pluscart($id)
    {

        $data = Cart::get($id);
        $product = DB::table('prd_detail')->where('prd_detail_id', $data->id)->first();
        if($product->prd_amount > $data->qty){
        Cart::update($id,['qty' => $data->qty + 1]);
        }
        return back();
    }
    function minuscart($id)
    {
        $data = Cart::get($id);
        Cart::update($id,['qty' => $data->qty - 1]);
        return back();
    }




    function prd_detail($id){
        $product = DB::table('prd_detail')
        ->join('product', 'prd_detail.prd_id', '=', 'product.prd_id')
        ->where('prd_detail.prd_id',$id)
        ->groupBy('prd_detail.prd_color') 
        ->get();

        $prdsize = DB::table('prd_detail')
        ->groupBy('prd_size')
        ->get();
        
        $prdcolor = DB::table('prd_detail')
        ->groupBy('prd_color')
        ->get();

        $prdimg = DB::table('prd_detail')
        ->groupBy('prd_image')
        ->orderBy('prd_detail_id')
        ->get();

        return view ('users.modun-user.productdetail',compact('product','prdsize','prdcolor','prdimg'));
    }
    
    
    function product(){

        $product = DB::table('product')
            ->join('prd_detail', 'product.prd_id', '=', 'prd_detail.prd_id')
            ->select('product.*','prd_detail.*')
            ->groupByRaw('product.prd_id')
            ->get();
        return view('users.modun-user.product',['prd'=>$product]);
    }
    function testc(){

        $product = DB::table('product')
        ->join('prd_detail', 'product.prd_id', '=', 'prd_detail.prd_id')
            ->first()  ;
            Cart::add('4', 'hahao', 2, 15, 550 );
            Cart::add($product->prd_detail_id,$product->prd_name,'2',$product->prd_price,'15');

        return view('users.modun-user.cart1');
    }
}
