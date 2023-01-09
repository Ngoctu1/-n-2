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
                    <i class="fa fa-gift"></i>
                    <strong>AIR JORDAN</strong>

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
                <ul>
                    <li><a href="#"><i class="fa fa-globe"></i>Mission</a></li>
                    <li>
                        <a href="#"><i class="fa fa-group"></i>Our Team</a>
                        <ul>
                            <li><a href="#"><i class="fa fa-female"></i>Leyla Sparks</a></li>
                            <li>
                                <a href="#"><i class="fa fa-male"></i>Gleb Ismailov</a>
                                <ul>
                                    <li><a href="#"><i class="fa fa-leaf"></i>About</a></li>
                                    <li><a href="#"><i class="fa fa-tasks"></i>Skills</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-trophy"></i>Rewards</a></li>
                    <li><a href="#"><i class="fa fa-certificate"></i>Certificates</a></li>
                </ul>
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
                <a style="border:none" href="{{route('users.productdetail',['id'=> $prd->prd_id])}}">
                <img  src='/anh/{{$prd->prd_image}}'
                    width='300'>
</a>
                <p style="margin-top:15px">{{$prd->prd_name}}</p>
                
                <p style="margin-top:5px">Price </p>{{ number_format($prd->prd_price) }} đ
                <a class="btn"type="button" style="margin-top:20px" href="{{route('users.productdetail',['id'=> $prd->prd_id])}}">Detail</a>
            </div>
            
        </div>
@endforeach
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='http://wellandgood.com/wp-content/uploads/2012/07/Nike-Free-30-Womens-Running-Shoe-511495_600_A.png'
                    width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='img/product3/1.jpg' width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='img/product2/1.jpg' width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>
        <div class='product'>
            <div class='product_inner'>
                <img src='img/product1/1.jpg' width='300'>
                <p>Nike Air (Women)</p>
                <p>Size 7</p>
                <p>Price £199.99</p>
                <button>BUY</button>
            </div>
            <div class='product_overlay'>
                <h2>Added to basket</h2>
                <i class='fa fa-check'></i>
            </div>
        </div>

</section>
@stop
