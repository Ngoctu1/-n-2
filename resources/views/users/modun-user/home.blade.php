@extends('users.masterUser')
@include('users.modun-user.banner')
@section('home')
    <section class="producth" id="producth">
        <h1 class="heading"><span>Best</span>seller</h1>
        <div class="box-container">
            @foreach($sells as $sell)
            <div class="box">
                <div class="content">
                    <a href="{{route('users.productdetail',1)}}"><img src="anh/{{$sell->prd_image}}" alt=""></a>
                    <h3>{{$sell->prd_name}}</h3>
                    <div class="price">{{number_format($sell->price)}} Đ</div>
                    
                </div>
            </div>
            @endforeach
            
        </div>
    </section>
    <!--end product-->
    <section class="featured" id="fearured">
        <h1 class="heading">New <span>Product</span></h1>
        <div class="row">
            <div class="image-container">
                <div class="small-image">
                    <img src="img/product1/1.jpg" alt="" class="featured-image-1">
                    <img src="img/product1/2.jpg" alt="" class="featured-image-1">
                    <img src="img/product1/3.jpg" alt="" class="featured-image-1">
                    <img src="img/product1/4.jpg" alt="" class="featured-image-1">
                </div>
                <div class="big-image">
                    <img src="img/product1/1.jpg" alt="" class="big-image-1">
                </div>
            </div>
            <div class="content">
                <h3>new nike airmac shoes</h3>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugit officiis omnis quo laboriosam velit culpa ex illo, error enim nostrum?
                </p>
                <div class="price">$90 <span>$120</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>
        <div class="row">
            <div class="image-container">
                <div class="small-image">
                    <img src="img/product2/1.jpg" alt="" class="featured-image-2">
                    <img src="img/product2/2.jpg" alt="" class="featured-image-2">
                    <img src="img/product2/3.jpg" alt="" class="featured-image-2">
                    <img src="img/product2/4.jpg" alt="" class="featured-image-2">
                </div>
                <div class="big-image">
                    <img src="img/product2/1.jpg" alt="" class="big-image-2">
                </div>
            </div>
            <div class="content">
                <h3>new nike airmac shoes</h3>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugit officiis omnis quo laboriosam velit culpa ex illo, error enim nostrum?
                </p>
                <div class="price">$90 <span>$120</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>
        <div class="row">
            <div class="image-container">
                <div class="small-image">
                    <img src="img/product3/1.jpg" alt="" class="featured-image-3">
                    <img src="img/product3/2.jpg" alt="" class="featured-image-3">
                    <img src="img/product3/3.jpg" alt="" class="featured-image-3">
                    <img src="img/product3/4.jpg" alt="" class="featured-image-3">
                </div>
                <div class="big-image">
                    <img src="img/product3/1.jpg" alt="" class="big-image-3">
                </div>
            </div>
            <div class="content">
                <h3>new nike airmac shoes</h3>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugit officiis omnis quo laboriosam velit culpa ex illo, error enim nostrum?
                </p>
                <div class="price">$90 <span>$120</span></div>
                <a href="#" class="btn">add to cart</a>
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