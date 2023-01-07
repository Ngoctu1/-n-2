@extends('Admin.master')

@section('product')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card" style="float: right; width: 80%">
        <div class="card-body">
            <h4 class="card-title">Product table</h4>
            <p class="card-description"> Add class 
            </p>
            <a class="badge badge-success" style="    font-size: 20px" href="#">Them</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> Id </th>
                        <th style="width: 16%"> Product name </th>
                        <th style="width: 190px"> Image </th>
                        <th> Price </th>
                        <th style="width: 25%"> Detail </th>
                        <th style="width: 5%"> Size </th>
                        <th style="width: 5%"> Amount </th>
                        <th > Sale </th>
                        <th style="width: 5%" > Sua </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($product as $product)
                    <tr>
                        <td>{{$product->prd_detail_id}}</td>
                        <td>{{$product->prd_name}}</td>
                        
                        <td> <img src="/anh/{{$product->prd_image}}" style="height:100px"  > </td>
                        <td> {{$product->prd_price}} </td>
                        <td style="display: -webkit-box;
                            max-height: 5.9rem;
                           -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: normal;
                            -webkit-line-clamp: 3;
                            line-height: 1.6rem;
                            "> {{$product->prd_details}} </td>
                        <td> {{$product->prd_size}}</td>
                        <td> {{$product->prd_amount}} </td>
                        <td> {{$product->prd_sale}} </td>
                        <td style=""><a href="{{route('admin.prd_detail',['id'=> $product->prd_detail_id])}}">
                            <i class="fa fa-pencil-square-o" aria-hidden="true" >
                            </i></td>

                    </tr>
                @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop