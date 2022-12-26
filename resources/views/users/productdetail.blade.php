<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link href="{{url('font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
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
                    <h1>
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
                                        <span class="material-icons-outlined">
                    
                                            star
                                        </span>
                                    </li>
                                    <li>
                                        <span class="material-icons-outlined">
                    
                                            star
                                        </span>
                                    </li>
                                    <li>
                                        <span class="material-icons-outlined">
                                            star
                                        </span>
                                    </li>
                                    <li>
                                        <span class="material-icons-outlined">
                                            star
                                        </span>
                                    </li>
                                    <li>
                                        <span class="material-icons-outlined">
                                            star_outlined
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="pricing">
                                <h4>Price</h4>
                                <h4 class="price">$150</h4>
                            </div>
                        </div>
                    </h1>
                </h1>
            </div>
        </main>
    </div>
</body>

</html>