@extends('users.masterUser')

@include('users.modun-user.banner')
@section('product')

<section style="margin-top: -5%; font-size: 1.5rem">
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
                <a href="{{route('users.product')}}">
                    
                    <strong>SNEAKERS</strong>
                </a>
            </li>

            <li>
                <a href="{{url('/product/1')}}">
                    
                    <strong>NIKE</strong>
                </a>
            </li>

            <li>
                <a href="{{url('/product/2')}}">
                    
                    <strong>ADIDAS</strong>
                </a>
            </li>

            
            <li>
                <a href="">
                    
                    <strong>PUMA</strong>

                </a>

            </li>
            

        </ul>
    </div>
    <div class='rowprd'>
        <table>
            <tbody>
                @foreach($prds as $prd)
                <div class='product'>
                    
                    <div class='product_inner'>

                        <a style="border:none" href="{{route('users.productdetail',['id'=> $prd->prd_id])}}">
                            <img src='/anh/{{$prd->prd_image}}'>
                        </a>
                        <p style="margin-top:15px">{{$prd->prd_name}}</p>


                        <p style="margin-top:5px">Price </p>{{ number_format($prd->price) }} đ
                        <a class="btn" type="button" style="margin-top:20px"
                            href="{{route('users.productdetail',['id'=> $prd->prd_id])}}">Detail</a>
                    </div>

                </div>
                @endforeach
            </tbody>
        </table>

    </div>
    <section>
        <div class='rowprd'>
        {{ $prds->links() }}

</div>
    </section>
</section>
@stop