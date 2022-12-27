<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/041cb6b55e.js" crossorigin="anonymous"></script>
     
   
   
</head>

<body>
    
    <div class="container">
        <nav>
            <a href="index.html" class="brand">Shoe</a>
            <span>Today Top Pics</span>
            <a href="#">
                <span class="material-icons-outlined">
                    shopping_bag
                </span>
            </a>
        </nav>
        <main>
            <div>
                <span>Mens</span>
                <h1 class="title">
                    <span class="titleText">
                        NIke Jordan
                    </span>
                    <span class="titleOverlay"></span>
                </h1>
        
                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet saepe impedit est, neque
                            quas laboriosam? Obcaecati ipsum in, magnam provident perferendis vero similique veritatis
                            reprehenderit mollitia, fuga inventore ut vitae?
                        </p>
                        <div class="thumbs">
                            <img src="{{ asset('img/thumbs/shoe1-1/img1.jpg') }}" class="thumb-active">
                            <img src="{{ asset('img/thumbs/shoe1-1/img2.jpg') }}"/>
                            <img src="{{ asset('img/thumbs/shoe1-1/img3.jpg') }}"/>
                            <img src="{{ asset('img/thumbs/shoe1-1/img4.jpg') }}"/>
                        </div>
                        <div>
                            <div class="showcase">
                                <img src="{{ asset('img/showcase/shoe1-1/img1.png') }}"/>
                                <div class="shadow"></div>
                            </div>
                        </div>
                        <div class="options">
                            <h4>Size</h4>
                            <ul class="sizes">
                                <li class="size-active">37</li>
                                <li class="">38</li>
                                <li class="">39</li>
                                <li class="">40</li>
                                <li class="">41</li>
                            </ul>
                            <div class="reviews">
                                <h4>Reviews</h4>
                                <ul class="stars">
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li>
                                        <span class="fa-regular fa-star"></span>
                                          
                                         
                                    </li>
                                </ul>
                            </div>
                            <div class="pricing">
                                <h4>Price</h4>
                                <h4 class="price">$150</h4>
                            </div>
                            <div class="colors">
                                <h4>Colors</h4>
                                <ul>
                                    <li class="color color-active"></li>
                                    <li class="color"></li>
                                </ul>
                            </div>
                        </div>  
            
        </main>
        <section class="bar-bottom">
            <div>
                <a href="#">
                    <i class="fa-solid fa-play"></i>
                    <span>Play Video</span>
                </a>
            </div>
            <div class="controls">
                <div class="arrows">
                    <i class="fa-solid fa-arrow-right"></i>
                    <i class="fa-solid fa-arrow-right"></i>

                </div>
                <div>
                    <small class="shoe-num">01</small>
                    <div class="pagination"> 
                        <span class="pag pag-active"></span>
                        <span class="pag"></span>
                        <span class="pag"></span>
                    
                    </div>
                    <small class="shoet-total">03</small>
                </div>
            </div>
            <div class="cart">
                <button>Add to Cart</button>
                <i class="fa-regular fa-heart"></i>
            </div>
            
        </section>
    </div>
</body>

</html>