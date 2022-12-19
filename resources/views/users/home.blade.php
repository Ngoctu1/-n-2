<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="{{url('css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS only -->
    </head>
    <body>
        <header>
            <div id="menu-bar" class="fa fa-bars"></div>
            <a href="#" class="logo">
            <img src="{{ asset('img/pnglogoSneaker.png') }}" height ="77px" width = "auto">
        </a>
            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="#product">Product</a>
                <a href="#fearured">Fearured</a>
                <a href="#blog">blog</a>
                <a href="#news">news</a>
            </nav>
            <div class="icons">
                <a href="#"><i class="fa fa-heart"></i></a>
                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                <a href="#"> Nguyen Ngọc Tú <i class="fa fa-user"></i></a>
                <a href="#" class="login_btn"> Login </a>
                <a href="#" class="signup_btn" style="color: white"> Sign up </a>

            </div>
        </header>
        <!--end header-->
        <section class="home" id="home">
            <div class="slide-container active">
                <div class="slide">
                    <div class="content">
                        <span>Nike Sport Shoes</span>
                        <h3>Nike Metcon Shoes</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit 
                            Sunt nam adipisci ipsa officiis Amet pariatur eaque soluta 
                            sit iure neque voluptate.
                        </p>
                        <a href="#" class="btn">add to card</a>
                    </div>
                    <div class="image">
                        <img src="img/slide/1.png" class="shoe">
                    </div>
                </div>
            </div>
            <div class="slide-container">
                <div class="slide">
                    <div class="content">
                        <span>Nike Sport Shoes</span>
                        <h3>Nike Metcon Shoes</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit 
                            Sunt nam adipisci ipsa officiis Amet pariatur eaque soluta 
                            sit iure neque voluptate.
                        </p>
                        <a href="#" class="btn">add to card</a>
                    </div>
                    <div class="image">
                        <img src="img/slide/2.png" class="shoe">
                    </div>
                </div>
            </div>
            <div class="slide-container">
                <div class="slide">
                    <div class="content">
                        <span>Nike Sport Shoes</span>
                        <h3>Nike Metcon Shoes</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit 
                            Sunt nam adipisci ipsa officiis Amet pariatur eaque soluta 
                            sit iure neque voluptate.
                        </p>
                        <a href="#" class="btn">add to card</a>
                    </div>
                    <div class="image">
                        <img src="img/slide/3.png" class="shoe">
                    </div>
                </div>
            </div>
            <div class="slide-container">
                <div class="slide">
                    <div class="content">
                        <span>Nike Sport Shoes</span>
                        <h3>Nike Metcon Shoes</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit 
                            Sunt nam adipisci ipsa officiis Amet pariatur eaque soluta 
                            sit iure neque voluptate.
                        </p>
                        <a href="#" class="btn">add to card</a>
                    </div>
                    <div class="image">
                        <img src="img/slide/4.png" class="shoe">
                    </div>
                </div>
            </div>

            <div id="prev" class="fa fa-angle-left" onclick="prev();"></div>
            
            <div id="next" class="fa fa-angle-right" onclick="next();"></div>
        </section>
        <!--end home-->
        <section class="product" id="product">
            <h1 class="heading">latest <span>Products</span></h1>
            <div class="box-container">
                <div class="box">
                    <div class="icons">
                        <a href="#" class="fa fa-heart"></a>
                        
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="content">
                        <img src="img/product4/1.jpg" alt="">
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
                    <div class="icons">
                        <a href="#" class="fa fa-heart"></a>
                        
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="content">
                        <img src="img/product4/2.jpg" alt="">
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
                    <div class="icons">
                        <a href="#" class="fa fa-heart"></a>
                        
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="content">
                        <img src="img/product4/3.jpg" alt="">
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
                    <div class="icons">
                        <a href="#" class="fa fa-heart"></a>
                        
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="content">
                        <img src="img/product4/5.jpg" alt="">
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
                    <div class="icons">
                        <a href="#" class="fa fa-heart"></a>
                       
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="content">
                        <img src="img/product4/7.png" alt="">
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
                    <div class="icons">
                        <a href="#" class="fa fa-heart"></a>
                        
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="content">
                        <img src="img/product4/8.png" alt="">
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
        <div class="section_footer">
    	<div class="container">
    		<div class="mail_section">
    			<div class="row">
    				<div class="col-sm-6 col-lg-2">
    					<div><a href="#"><img src="images/footer-logo.png"></a></div>
    				</div>
    				<div class="col-sm-6 col-lg-2">
    					<div class="footer-logo"><img src="images/phone-icon.png"><span class="map_text">(71) 1234567890</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-3">
    					<div class="footer-logo"><img src="images/email-icon.png"><span class="map_text">Demo@gmail.com</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-3">
    					<div class="social_icon">
    						<ul>
    							<li><a href="#"><img src="images/fb-icon.png"></a></li>
    							<li><a href="#"><img src="images/twitter-icon.png"></a></li>
    							<li><a href="#"><img src="images/in-icon.png"></a></li>
    							<li><a href="#"><img src="images/google-icon.png"></a></li>
    						</ul>
    					</div>
    				</div>
    				<div class="col-sm-2"></div>
    			</div>
    	    </div> 
    	    <div class="footer_section_2">
		        <div class="row">
    		        <div class="col-sm-4 col-lg-2">
    		        	<p class="dummy_text"> ipsum dolor sit amet, consectetur ipsum dolor sit amet, consectetur  ipsum dolor sit amet,</p>
    		        </div>
    		        <div class="col-sm-4 col-lg-2">
    		        	<h2 class="shop_text">Address </h2>
    		        	<div class="image-icon"><img src="images/map-icon.png"><span class="pet_text">No 40 Baria Sreet 15/2 NewYork City, NY, United States.</span></div>
    		        </div>
    		        <div class="col-sm-4 col-md-6 col-lg-3">
    				    <h2 class="shop_text">Our Company </h2>
    				    <div class="delivery_text">
    				    	<ul>
    				    		<li>Delivery</li>
    				    		<li>Legal Notice</li>
    				    		<li>About us</li>
    				    		<li>Secure payment</li>
    				    		<li>Contact us</li>
    				    	</ul>
    				    </div>
    		        </div>
    			<div class="col-sm-6 col-lg-3">
    				<h2 class="adderess_text">Products</h2>
    				<div class="delivery_text">
    				    	<ul>
    				    		<li>Prices drop</li>
    				    		<li>New products</li>
    				    		<li>Best sales</li>
    				    		<li>Contact us</li>
    				    		<li>Sitemap</li>
    				    	</ul>
    				    </div>
    			</div>
    			<div class="col-sm-6 col-lg-2">
    				<h2 class="adderess_text">Newsletter</h2>
    				<div class="form-group">
                        <input type="text" class="enter_email" placeholder="Enter Your email" name="Name">
                    </div>
                    <button class="subscribr_bt">Subscribe</button>
    			</div>
    			</div>
    	        </div> 
	        </div>
    	</div>
    </div>
    </body>
</html>

<script src="{{url('js/script.js')}}"></script>