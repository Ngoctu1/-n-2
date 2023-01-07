@extends('users.masterUser')
@section('product')
@section('css')
@stop
<link href="{{url('css/cartcss/cart.css')}}" rel="stylesheet" type="text/css">


   <section>
    <div class="small-container cart-page" >
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="{{ asset('img/product1/1.jpg') }}">
                        <div>
                            <p>Shoe</p>
                            <small>Price: 100,000VND</small>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>100.000VND</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="{{ asset('img/product1/2.jpg') }}">
                        <div>
                            <p>Shoe</p>
                            <small>Price: 100,000VND</small>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>100.000VND</td>
            </tr>
            
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="{{ asset('img/product1/3.jpg') }}">
                        <div>
                            <p>Shoe</p>
                            <small>Price: 100,000VND</small>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>100.000VND</td>
            </tr>

           
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>100,000</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>100,000</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>100,000</td>
                </tr>
            </table>
        </div>
    </div>
   </section>
@stop
