@extends('users.masterUser')
@section('product')
@section('css')
@stop
<link href="{{url('css/cartcss/cart.css')}}" rel="stylesheet" type="text/css">


   <section>
    <div class="small-container cart-page" >
    @if (count(Cart::content()))
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>color</th>
                <th>size</th>
                <th>Subtotal</th>

            </tr>
            @foreach (Cart::content() as $item)
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="{{ asset('img/product1/1.jpg') }}">
                        <div>
                            <p>{{ $item->name }}</p>
                            <small>{{ $item->price }}</small>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="{{ $item->qty }}" min="1"></td>
                <td>{{ $item->options->color }}</td>
                <td>{{ $item->options->size }}</td>
                <td>{{ $item->total }}</td>
            </tr>
            @endforeach
            
           
        </table>
        <div class="total-price">
            <table>
                
                <tr>
                    <td>Total</td>

                    <td>{{ Cart::total() }}d</td>

                    
                </tr>
                <tr>
                <td></td>
                <td >                        
                    <a class="btn" style="background-color: #56e856" href="{{ route('users.payment') }}"> Thanh toán </a>
</td>
             </tr>
            </table>
        </div>
        @else
                    <div class="alert alert-info text-center m-0" role="alert">
                        Your Cart is <b>empty</b>.
                    </div>
                    @endif
    </div>
   </section>
@stop
