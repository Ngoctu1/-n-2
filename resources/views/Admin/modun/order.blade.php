@extends('Admin.master')

@section('order')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card" style="float: right; width: 80%">
        <div class="card-body">
            <h4 style="margin-bottom: 18px" class="card-title">Order table</h4>
            
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> Id </th>
                        <th style="width: 16%"> name </th>
                        <th style="width: 190px"> status </th>
                        <th> Price </th>
                        <th style="width: 25%"> address </th>
                        <th style="width: 5%"> phone </th>
                        <th style="width: 5%"> Amount </th>
                        
                        <th style="width: 5%" > Sua </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td> {{$order->name}}</td>
                        <td>{{$order->status}}</td>
                        
                        
                        <td> {{$order->grand_total}} </td>
                        
                        <td> {{$order->address}} </td>
                        <td> {{$order->phone_number}} </td>
                        <td> {{$order->item_count}} </td>
                        <td style=""><a href="{{route('admin.orderdetail',['id'=> $order->order_id])}}">
                            <i class="fa fa-pencil-square-o" aria-hidden="true" >
                            </i></td>

                    </tr>
                @endforeach
                
                    
                </tbody>
                
            </table>{{ $orders->links() }}
        </div>
    </div>
</div>
@stop