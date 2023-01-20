@extends('users.masterUser')
@section('css')
    <style>
        th {
            text-align: center;

        }

        td {
            vertical-align: middle;
            text-align: center;
        }
    </style>

@stop

@section('order')
    <div style="margin-bottom: 180px;">
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col-sm-8">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title" style="text-align: center;">ORDER LIST</h2>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> # </th>
                                                <th> Name </th>
                                                <th style="    width: 300px;"> Address </th>
                                                <th> Amount </th>
                                                <th> Total </th>
                                                <th> Order at </th>
                                                <th> Status </th>
                                                <th> Detail </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $item)
                                                <tr>
                                                    <td>{{ $item->order_id }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->address }}</td>
                                                    <td>{{ $item->item_count }}</td>
                                                    <td>{{ $item->grand_total }} đ</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>

                                                        @if ($item->status == 'cancel')
                                                            <a>cancelled</a>
                                                        @elseif($item->status == 'pending')
                                                            <div class="row">
                                                                <div class="col-sm">
                                                                    <p style="margin-top: 5%;margin-bottom: 5%;">
                                                                        {{ $item->status }} </p>
                                                                </div>
                                                                <div class="col-sm">
                                                                    <a class="btn btn-danger btn-fw"
                                                                        style="  background-color: #ff375f; border-color: #ff375f; float: right; margin-top: 2px;width: 90px;padding: 0;margin-right: 10px;"
                                                                        href="{{ route('users.ordercancel', $item->order_id) }}">cancel</a>
                                                                </div>
                                                            </div>
                                                        @else
                                                            {{ $item->status }}
                                                        @endif


                                                    </td>
                                                    <td><a
                                                            href="{{ route('users.orderdetail', ['id' => $item->order_id]) }}">chi
                                                            tiet</a></td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>




                        <!-- ----     -->






                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
