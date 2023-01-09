@extends('users.masterUser')

@section('productdetail')
@section('css')
@stop
<link href="{{url('css/detailprdcss/detailprd.css')}}" rel="stylesheet" type="text/css">
<section>


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
                                    <span><img src="/anh/{{$product->prd_image}}"
                                            alt=""></span>
                                </a>
                                @endforeach

                            </div>
                            <div class="big">
                                <div id="slideshow">
                                    <div class="slide-wrapper">
                                      @foreach($prdimg as $prdimg)
                                        <div class="slide"><img
                                                src="/anh/{{$prdimg->prd_image}}" height:200px >
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
                                    <div class="price" id="price-preview" quickbeam="price" quickbeam-price="800">
                                        Giá {{$product->prd_price}} đ
                                    </div>

                                </div>
                                <div class="swatches">
                                    <div class="swatch clearfix" data-option-index="0">
                                        <div class="header">Size</div>
                                        @foreach($prdsize as $prdsize)
                                        <div data-value="{{$prdsize->prd_size}}"
                                            class="swatch-element plain {{$prdsize->prd_size}} available">
                                            <input id="swatch-0-{{$prdsize->prd_size}}" type="radio" name="option-0"
                                                value="{{$prdsize->prd_size}}" />

                                            <label for="swatch-0-{{$prdsize->prd_size}}">
                                                {{$prdsize->prd_size}}
                                                <img class="crossed-out"
                                                    src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                                            </label>
                                        </div>
                                        @endforeach

                                    </div>
                                    <div class="swatch clearfix" data-option-index="1">
                                        <div class="header">Color</div>
                                        @foreach($prdcolor as $prdcolor)
                                        <div data-value="{{$prdcolor->prd_color}}"
                                            class="swatch-element color green available">
                                            <div class="tooltip">{{$prdsize->prd_color}}</div>
                                            <input quickbeam="color" id="swatch-1-{{$prdcolor->prd_color}}" type="radio"
                                                name="option-1" value="{{$prdcolor->prd_color}}" checked />
                                            <label for="swatch-1-{{$prdcolor->prd_color}}"
                                                style="border-color: black;">
                                                <img class="crossed-out"
                                                    src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                                                <span style="background-color: {{$prdcolor->prd_color}};"></span>
                                            </label>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
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
                                            <div class="spinner">

                                                <input type="number" id="updates_2721888517" name="quantity" value="1"
                                                    min="1">

                                                <span class="q">Qty.</span>

                                            </div>
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