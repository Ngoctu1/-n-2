@extends('Admin.master')

@section('product')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card" style="float: right; width: 80%">
        <div class="card-body">
            <h4 class="card-title">Product table</h4>
            <p class="card-description"> Add class <code>.table-bordered</code>
            </p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> Id </th>
                        <th> Product name </th>
                        <th style="width: 190px"> Image </th>
                        <th> Price </th>
                        <th> Detail </th>
                        <th style="width: 90px"> Size </th>
                        <th style="width: 90px"> Amount </th>
                        <th style="width: 90px"> Sale </th>
                        <th style="width: 90px" > Sua </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($product as $product)
                    <tr>
                        <td>{{$product->prd_detail_id}}</td>
                        <td>{{$product->prd_name}}</td>
                        
                        <td> {{$product->prd_image}} </td>
                        <td> {{$product->prd_price}} </td>
                        <td> {{$product->prd_details}} </td>
                        
                        <td> {{$product->prd_size}}</td>
                        <td> {{$product->prd_amount}} </td>
                        <td> {{$product->prd_sale}} </td>
                        <td> {{$product->cat_name}} </td>
                    </tr>
                @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop