@extends('users.masterUser')
@section('payment')


    <link  href="{{url('css/paymentcss/payment.css') }}" type="text/css" rel="stylesheet">

<section>
    <div class="containerpm">

        <form method="post" action="{{route('checkout.place.order')}}">
            @csrf
            <div class="row">
    
                <div class="col">
    
                    <h3 class="title">Billing address</h3>
    
                    <div class="inputBox">
                        <span>full name :</span>
                        <input name="name" type="text" value="{{Auth::user()->name}}" placeholder="">
                    </div>
                    <div class="inputBox">
                        <span>email :</span>
                        <input name="email" type="email" value="{{Auth::user()->email}}" placeholder="">
                    </div>
                    <div class="inputBox">
                        <span>city :</span>
                        <input name="city" type="text" value="" placeholder="">
                    </div>
                    
                </div>
    
                <div class="col">
    
                    <h3 class="title"> |</h3>
    
                    <!-- <div class="inputBox">
                        <span>cards accepted :</span>
                        <img src="img/card_img.png" alt="">
                    </div> -->
                    <div class="inputBox">
                        <span>address :</span>
                        <input name="address" type="text" value="{{Auth::user()->address}}" placeholder="">
                    </div>
                    <div class="inputBox">
                        <span>Phone number :</span>
                        <input name="phone" type="text" value="{{Auth::user()->phone}}" placeholder="">
                    </div>

                    
    
                    <!-- <div class="flex">
                        <div class="inputBox">
                            <span>exp year :</span>
                            <input type="number" placeholder="">
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="text" placeholder="">
                        </div>
                    </div> -->
    
                </div>
        
            </div>
            <div class="col-md-12">
                                <div class="card">
                                   
                                    <article class="card-body">
                                        <dl class="dlist-align">
                                            <dt style="font-size: 12px; font-weight: bold">Total cost: </dt>
                                            <dd class="text-right h4 b"> {{ config('settings.currency_symbol') }}{{ Cart::total() }} </dd>
                                        </dl>
                                    </article>
                                </div>
                            </div>
            <button type="submit"  class="submit-btn"> PAY</button>
    
        </form>
    
    </div>    
</section>
    
@stop