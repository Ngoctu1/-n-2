@extends('users.masterUser')
@include('users.modun-user.banner')
@section('home')
    <section class="producth" id="producth">
        <h1 class="heading">latest <span>Products</span></h1>
        <div class="box-container">
            <div class="box">
                <div>

                </div>
                <div class="content">
                    <a href="{{ route('users.productdetail', 10) }}"><img src="img/product4/nikeairmax90se.png"
                            alt=""></a>
                    <h3>Nike Air Max SE 90</h3>
                    <div class="price">200.000VND <span>350.000VND</span></div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div>

                </div>
                <div class="content">
                    <a href="{{ route('users.productdetail', 11) }}"><img src="img/product4/Air Jordan 1 Zoom Comfort 2.png"
                            alt=""></a>
                    <h3>Air Jordan 1 Zoom Comfort 2</h3>
                    <div class="price">430.000VND <span>500.000VND</span></div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div>

                </div>
                <div class="content">
                    <a href="{{ route('users.productdetail', 12) }}"><img src="img/product4/Air Jordan 1 Mid.png"
                            alt=""></a>
                    <h3>Air Jordan 1 Mid</h3>
                    <div class="price">3.669.000VND <span>4.000.000VND</span></div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div>

                </div>
                <div class="content">
                    <a href="{{ route('users.productdetail', 13) }}"><img src="img/product4/Air Jordan 1 Mid SE.png"
                            alt=""></a>
                    <h3>Air Jordan 1 Mid SE</h3>
                    <div class="price">3.829.000VND <span>4.200.000VND</span></div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div>

                </div>
                <div class="content">
                    <a href="{{ route('users.productdetail', 14) }}"><img
                            src="img/product4/Suede-Classic-XXI-Men's-Sneakers.png" alt=""></a>
                    <h3>Nike Shoes</h3>
                    <div class="price">$200 <span>$150</span></div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div>
                    <a></a>

                    <a></a>
                </div>
                <div class="content">
                    <a href="{{ route('users.productdetail', 15) }}"> <img src="img/product4/nikeairmax90LTR.png"
                            alt=""></a>
                    <h3>Nike Shoes</h3>
                    <div class="price">$200 <span>$150</span></div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end product-->
    <section class="featured" id="fearured">
        <h1 class="heading">New <span>Product</span></h1>
        <div class="row">
            <div class="image-container">
                <div class="small-image">
                    <img src="img/product1/Nike Alphafly 2 1.png" alt="" class="featured-image-1">
                    <img src="img/product1/Nike Alphafly 2 2.png" alt="" class="featured-image-1">
                    <img src="img/product1/Nike Alphafly 3.png" alt="" class="featured-image-1">
                    <img src="img/product1/Nike Alphafly 2 4.png" alt="" class="featured-image-1">
                </div>
                <div class="big-image">
                    <img src="img/product1/Nike Alphafly 2.png" alt="" class="big-image-1">
                </div>
            </div>
            <div class="content">
                <h3>New Nike Alphafly 2</h3>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>
                    Once you take a few strides in the Nike Alphafly 2, you'll never look at your favourite pair of old
                    racing shoes in the same way. These rocket ships are made to help shave precious time off your personal
                    records without surrendering the foundation you need to go the full distance. A thick, lightweight
                    support system brings comfort and speed together so you can enjoy our greatest energy return while you
                    chase your personal bests.
                </p>
                <div class="price">8.369.000VND <span></span></div>
                <a href="{{ route('users.productdetail', ['id' => 16]) }}" class="btn">add to cart</a>
            </div>
        </div>
        <section class="featured" id="fearured">
            <h1 class="heading">New <span>Product</span></h1>
            <div class="row">
                <div class="image-container">
                    <div class="small-image">
                        <img src="img/product1/Nike Alphafly 2 1.png" alt="" class="featured-image-1">
                        <img src="img/product1/Nike Alphafly 2 2.png" alt="" class="featured-image-1">
                        <img src="img/product1/Nike Alphafly 3.png" alt="" class="featured-image-1">
                        <img src="img/product1/Nike Alphafly 2 4.png" alt="" class="featured-image-1">
                    </div>
                    <div class="big-image">
                        <img src="img/product1/Nike Alphafly 2.png" alt="" class="big-image-1">
                    </div>
                </div>
                <div class="content">
                    <h3>New Nike Alphafly 2</h3>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>
                        Once you take a few strides in the Nike Alphafly 2, you'll never look at your favourite pair of old
                        racing shoes in the same way. These rocket ships are made to help shave precious time off your personal
                        records without surrendering the foundation you need to go the full distance. A thick, lightweight
                        support system brings comfort and speed together so you can enjoy our greatest energy return while you
                        chase your personal bests.
                    </p>
                    <div class="price">8.369.000VND <span></span></div>
                    <a href="{{ route('users.productdetail', ['id' => 16]) }}" class="btn">add to cart</a>
                </div>
            </div>

        </div>
    </section>
    <!--end featured-->
    <section class="blog" id="blog">
        <h1 class="heading">Team <span>Weblog</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="img/team/1.png" alt="">
                <h3>Zahra Ahmadi</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Eos sequi temporibus impedit corporis vero ab exercitationem
                    dolore voluptatibus, nisi non.
                </p>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa fa-star"></i>
                </div>
            </div>
            <div class="box">
                <img src="img/team/2.png" alt="">
                <h3>Maryam Nazari</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Eos sequi temporibus impedit corporis vero ab exercitationem
                    dolore voluptatibus, nisi non.
                </p>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa fa-star-half-o"></i>
                </div>
            </div>
            <div class="box">
                <img src="img/team/3.png" alt="">
                <h3>Layla Akbari</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Eos sequi temporibus impedit corporis vero ab exercitationem
                    dolore voluptatibus, nisi non.
                </p>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa fa-star-half-o"></i>
                </div>
            </div>
        </div>
    </section>
    <!--end blog-->
    <section class="news" id="news">
        <div class="content">
            <h3>monthly news letter</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Fuga sed itaque ducimus maxime facere nihil expedita non sunt? Nostrum, voluptatem?
            </p>
            <form action="">
                <input type="email" placeholder="please enter your email" class="email">
                <input type="submit" value="save" class="btn">
            </form>
        </div>
    </section>
    <!--end news-->
    <section class="cridet" id="cridet">
        <div class="box">
            <h3>all reserved by codeskill</h3>
        </div>
    </section>
@stop
