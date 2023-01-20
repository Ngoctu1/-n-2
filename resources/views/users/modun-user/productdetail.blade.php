@extends('users.masterUser')

@section('productdetail')

    <link href="{{ url('css/detailprdcss/detailprd.css') }}" rel="stylesheet" type="text/css">
    <section>

        <section class="featured" id="fearured">
            <h1 class="heading">Product <span>Details</span></h1>
            <div class="row">
                <div class="image-container">
                    <div class="small-image">
                        @foreach ($products as $product)
                        <img src="/anh/{{ $product->prd_image }}" alt=""
                            class="featured-image-1">
                    @endforeach
                    </div>
                    <div class="big-image">
                        <img src="/anh/{{ $product->prd_image }}" alt="" class="big-image-1">
                    </div>
                </div>
                <div class="content">
                    <h3>{{ $product->prd_name }}</h3>
                    
                    <p>
                        {{ $product->prd_details }}
                    </p>
                    <div class="price" style="color: red">{{ number_format($product->price) }}VND</div>
                    <div class="addcart">
                        <form method="post" action="{{ route('cart.add') }}">
                            @csrf
                            <input type="hidden" name="prd_id" value="{{ $product->prd_id }}">
                            <div class="swatches">
                                <div class="swatch clearfix">
            
                                    <div class="header" style="font-weight: bold">Size</div>
                                    <select class="form-control" name="prd_size" id="example FormControlSelect2"
                                        style="margin-top: 10px;width: 4rem;height: 3rem;font-size: 1.7rem; border: 0.2rem solid;"
                                        name="size">
                                        @foreach ($prdsize as $prdsize)
                                            <option value="{{ $prdsize->prd_size }}">
                                                {{ $prdsize->prd_size }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="swatch clearfix" style="font-size: 1.8rem" data-option-index="1">
                                    <div class="header" style="margin-left: 10px">Color</div>
            
                                    @foreach ($products as $product)
                                        <input type="radio" class="boxcolor" name="prd_color"
                                            value="{{ $product->prd_color }}" checked>
                                        {{ $product->prd_color }}
                                    @endforeach
                                </div>
                            </div>
                            <div class="btn-and-quantity-wrap" style="display: inline-block;
                            margin-top: 1rem;
                            border-radius: .5rem;
                            border: .2rem solid #000;
                            font-weight: bolder;
                            font-size: 1.7rem;
                            color: #000;
                            cursor: pointer;
                            background: #fff;
                            padding: .8rem 3rem;">
                                <div class="btn-and-quantity">
        
                                    <div quickbeam="add-to-cart">
        
                                        <button id="AddToCart" type="submit" href="">ADD TO CART</button>
        
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>               
                </div>
              
            </div>
        </section>

    </section>
    <script>
        js / detailprd / detailprd.js
    </script>
@stop
