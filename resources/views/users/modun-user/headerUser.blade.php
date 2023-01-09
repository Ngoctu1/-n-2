<section>
<header>
        <div id="menu-bar" class="fa fa-bars"></div>
        <a href="{{route('users.home')}}" class="logo">
            <img src="{{ asset('img/pnglogoSneaker.png') }}" height="77px" width="auto">
        </a>
        <nav class="navbar">
            <a href="{{route('users.home')}}">Home</a>
            <a href="{{ route('users.product') }}">Product</a>
            <a href="#fearured">Fearured</a>
            <a href="#blog">blog</a>
            <a href="#news">news</a>
        </nav>
        <div class="icons">
            
            <a href="{{route('users.cartshop') }}">{{Cart::count()}}<i class="fa fa-shopping-cart"></i></a>
            <a href="#"> Nguyen Ngọc Tú <i class="fa fa-user"></i></a>
            <a href="{{route('users.login')}}" class="login_btn"> Login </a>
            <a href="{{route('users.register')}}" class="signup_btn" style="color: white"> Sign up </a>

        </div>
    </header>
</section>