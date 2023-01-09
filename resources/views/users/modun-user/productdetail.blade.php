@extends('users.masterUser')

@section('productdetail')
@section('css')
@stop
<link href="{{url('css/detailprdcss/detailprd.css')}}" rel="stylesheet" type="text/css">
<section>
    {{-- <script>src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
{{ 'quickbeam.min.js' }}
    <script>
    var cart = Quickbeam.init({
        'animationLib': 'gsap',
        'variantSelector': function() {

        }
    });
    </script> --}}

    <section aria-label="Main content" role="main" class="product-detail">
        <div itemscope itemtype="http://schema.org/Product">
            <meta itemprop="url"
                content="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
            <meta itemprop="image"
                content="//cdn.shopify.com/s/files/1/1047/6452/products/product_grande.png?v=1446769025">
            <div class="shadow">
                <div class="_cont detail-top">
                    <div class="cols">
                        <div class="left-col">
                            <div class="thumbs">
                                @foreach($product as $product)
                                <a class="thumb-image active" href="/anh/{{$product->prd_image}}" data-index="0">
                                    <span><img src="/anh/{{$product->prd_image}}" alt=""></span>
                                </a>
                                @endforeach

                            </div>
                            <div class="big">
                                <div id="slideshow">
                                    <div class="slide-wrapper">
                                        @foreach($prdimg as $prdimg)
                                        <div class="slide"><img src="/anh/{{$prdimg->prd_image}}" height:200px>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-col">
                            <h1 itemprop="name">{{$product->prd_name}}</h1>
                            <h4 style="width: 440px;    text-align: justify;">{{$product->prd_details}}</h4>
                            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                <meta itemprop="priceCurrency" content="USD">
                                <link itemprop="availability" href="http://schema.org/InStock">
                                <div class="price-shipping">
                                    <div class="price" id="price-preview"  quickbeam="price"
                                        quickbeam-price="800">
                                        <p style="font-size: 2.9rem;"> Giá {{number_format($product->prd_price)}} đ</p>
                                    </div>

                                </div>
                                <form method="post" action="">
                                    <div class="swatches">
                                        <div class="swatch clearfix">

                                            <div class="header">Size</div>
                                            <select class="form-control" id="example FormControlSelect2"
                                                style="margin-top: 10px;width: 4rem;height: 3rem;font-size: 1.7rem; border: 0.2rem solid;"
                                                name="size">
                                                @foreach($prdsize as $prdsize)

                                                <option value="{{$prdsize->prd_size}}">{{$prdsize->prd_size}}</option>

                                                @endforeach
                                            </select>





                                        </div>
                                        <div class="swatch clearfix" style="font-size: 1.8rem" data-option-index="1">
                                            <div class="header">Color</div>

                                            @foreach($prdcolor as $prdcolor)

                                            <input type="radio" class="boxcolor" name="prd_color"
                                                value="{{$prdcolor->prd_color}}"> {{$prdcolor->prd_color}}
                                            @endforeach


                                        </div>
                                    </div>
                                    <div class="btn-and-quantity-wrap">
                                        <div class="btn-and-quantity">

                                            <div id="AddToCart" quickbeam="add-to-cart">
                                                <span id="AddToCartText">Add to Cart</span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- <form method="post" enctype="multipart/form-data" id="AddToCartForm"> -->
                                <form id="AddToCartForm">
                                    <select name="id" id="productSelect" quickbeam="product"
                                        class="product-single__variants">
                                        <option selected="selected" data-sku="" value="7924994501">
                                            M / Blue - $800.00 USD
                                        </option>
                                        <option data-sku="" value="7924995077">
                                            M / Red - $850.00 USD
                                        </option>
                                        <option data-sku="" value="7924994437">
                                            L / Blue - $850.00 USD
                                        </option>
                                        <option data-sku="" value="7924994693">
                                            L / Yellow - $850.00 USD
                                        </option>
                                        <option data-sku="" value="7924995013">
                                            L / Red - $850.00 USD
                                        </option>
                                        <option data-sku="" value="7924994373">
                                            XL / Blue - $900.00 USD
                                        </option>
                                        <option data-sku="" value="7924994629">
                                            XL / Yellow - $850.00 USD
                                        </option>
                                        <option data-sku="" value="7924830021">
                                            XXL / Blue - $950.00 USD
                                        </option>
                                        <option data-sku="" value="7924994885">
                                            XXL / Red - $850.00 USD
                                        </option>
                                    </select>
                                    <div class="btn-and-quantity-wrap">
                                        <div class="btn-and-quantity">

                                            <div id="AddToCart" quickbeam="add-to-cart">
                                                <span id="AddToCartText">Add to Cart</span>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </section>


    <!-- Quickbeam cart-->

    <div id="quick-cart" quickbeam="cart">
        <a id="quick-cart-pay" quickbeam="cart-pay" class="cart-ico">
            <span>
                <strong class="quick-cart-text">Pay<br></strong>
                <span id="quick-cart-price">0</span>
                <span id="quick-cart-pay-total-count">0</span>
            </span>
        </a>
    </div>

    <!-- Quickbeam cart end -->
</section>
<script>
js / detailprd / detailprd.js
</script>
@stop