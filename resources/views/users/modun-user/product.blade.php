@extends('users.masterUser')
@section('product')
@include('users.modun-user.banner')


<section style="margin-top: 5%; font-size: 1.5rem">
<h1 style="    text-align: center"> Sneakers</h1>
    <div class='rowsb'>
        <ul class="mcd-menu">
            <li class="float">
                <a class="search">
                    <input type="text" value="">
                    <button><i class="fa fa-search"></i></button>
                </a>
                <a href="" class="search-mobile">
                    <i class="fa fa-search"></i>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-home"></i>
                    <strong>SNEAKER</strong>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-edit"></i>
                    <strong>ADIDAS</strong>
                </a>
            </li>
            
            <li>
                <a href="">
                    <i class="fa fa-globe"></i>
                    <strong>NIKE</strong>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-comments-o"></i>
                    <strong>PUMA</strong>

                </a>
                
            </li>
            <li>
                <a href="">
                    <i class="fa fa-picture-o"></i>
                    <strong>Portfolio</strong>
                    <small>sweet home</small>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-envelope-o"></i>
                    <strong>Contacts</strong>
                    <small>drop a line</small>
                </a>
            </li>

        </ul>
    </div>
    <div class='rowprd'>
@foreach($prd as $prd)
        <div class='product'>
            <div class='product_inner'>
                <img src='/anh/{{$prd->prd_image}}' width='300'>
                <p>{{$prd->prd_name}}</p>
                
                <p>Price {{$prd->prd_price}}</p>
                <a class="btn"type="button" href="{{route('users.productdetail',['id'=> $prd->prd_id])}}">BUY</a>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
@endforeach
        
        

</section>
@stop
