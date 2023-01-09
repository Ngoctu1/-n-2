@extends('users.masterUser')
@section('payment')


    <link  href="{{url('css/paymentcss/payment.css') }}" type="text/css" rel="stylesheet">

<section>
    <div class="containerpm">

        <form action="">
    
            <div class="row">
    
                <div class="col">
    
                    <h3 class="title">Billing address</h3>
    
                    <div class="inputBox">
                        <span>full name :</span>
                        <input type="text" placeholder="">
                    </div>
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" placeholder="">
                    </div>
                    <div class="inputBox">
                        <span>address :</span>
                        <input type="text" placeholder="">
                    </div>
                    <div class="inputBox">
                        <span>city :</span>
                        <input type="text" placeholder="">
                    </div>
    
                    <div class="flex">
                        <div class="inputBox">
                            <span>state :</span>
                            <input type="text" placeholder="">
                        </div>
                        <div class="inputBox">
                            <span>zip code :</span>
                            <input type="text" placeholder="">
                        </div>
                    </div>
    
                </div>
    
                <div class="col">
    
                    <h3 class="title">payment</h3>
    
                    <div class="inputBox">
                        <span>cards accepted :</span>
                        <img src="img/card_img.png" alt="">
                    </div>
                    <div class="inputBox">
                        <span>name on card :</span>
                        <input type="text" placeholder="">
                    </div>
                    <div class="inputBox">
                        <span>credit card number :</span>
                        <input type="number" placeholder="">
                    </div>
                    <div class="inputBox">
                        <span>exp month :</span>
                        <input type="text" placeholder="">
                    </div>
    
                    <div class="flex">
                        <div class="inputBox">
                            <span>exp year :</span>
                            <input type="number" placeholder="">
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="text" placeholder="">
                        </div>
                    </div>
    
                </div>
        
            </div>
    
            <input type="submit" value="proceed to checkout" class="submit-btn">
    
        </form>
    
    </div>    
</section>
    
@stop