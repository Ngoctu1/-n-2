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
                        <th style=""> status </th>
                        <th> Price </th>
                        <th style="width: 25%"> address </th>
                        <th style="width: 5%"> phone </th>
                        <th style="width: 5%"> Amount </th>

                        <th style=""> Chi tiet </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td> {{$order->name}}</td>
                        <input type="hidden" id="mySelecty" value="{{$order->id}} ">
                        <td>

                            @if($order->status == 'pending')
                            <p class="btn btn-warning btn-fw" > {{$order->status}} </p>
                            @elseif($order->status == 'processing')
                            <p class="btn btn-info btn-fw"> {{$order->status}} </p>
                            @elseif($order->status == 'completed')
                            <p class="btn btn-success btn-fw"> {{$order->status}} </p>
                            @else
                            <p class="btn btn-danger btn-fw"> {{$order->status}} </p>
                            @endif

                        </td>



                        <td> {{$order->grand_total}} </td>

                        <td>
                            <p id="demo"></p>
                        </td>
                        <td> {{$order->phone_number}} </td>
                        <td> {{$order->item_count}} </td>
                        <td style=""><a href="{{route('admin.orderdetail',['id'=> $order->order_id])}}">
                                <i class="fa fa-pencil-square-o" aria-hidden="true">
                                </i></td>

                    </tr>
                    @endforeach


                </tbody>

            </table>{{ $orders->links() }}
        </div>
    </div>
</div>

<!-- <script>
function myFunction() {
  var x = document.getElementById("mySelectx").value;
  var y = document.getElementById("mySelecty").value;
  
  var url = "{{ route('admin.updatestatus', [ ':id',':vl']) }}";
  url = url.replace(':id', y);
  url = url.replace(':vl', x);
  
	location.href = url;

}
</script> -->
@stop