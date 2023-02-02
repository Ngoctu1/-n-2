@extends('Admin.master')



@section('css')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
@stop
@section('js')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
@stop
@section('content-account')

<div class="main-panel">
    <div class="content-wrapper" style="float: right;
  width: 80%;">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i
                            class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <h4 class="font-weight-normal mb-3">Sold <i
                                class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{$sold}}</h2>

                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <h4 class="font-weight-normal mb-3">Orders <i class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{$orders}}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">

                        <h4 class="font-weight-normal mb-3">Revenue <i
                                class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{($revenue)}} Đ</h2>

                    </div>
                </div>
            </div>

        </div>
        <div class="row">

            <div id="chart" style="height: 250px;"></div>

            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Traffic Sources</h4>
                        <canvas id="traffic-chart"></canvas>
                        <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Top 5 Best Selling</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        
                                        <th> name </th>
                                        <th> Image </th>
                                        <th> sold </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sells as $key => $sell)
                                    <tr>
                                        <td> {{ ++$key }} </td>
                                        <td> {{$sell->prd_name}} </td>
                                        <td>
                                            <image src="/anh/{{$sell->prd_image}}" width="110px ">
                                        </td>
                                        <td>{{$sell -> sold}} </td>

                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</div>
<script>
Morris.Bar({
    element: 'chart',
    data: [{
            date: '04-02-2014',
            value: 3
        },
        {
            date: '04-03-2014',
            value: 10
        },
        {
            date: '04-04-2014',
            value: 5
        },
        {
            date: '04-05-2014',
            value: 17
        },
        {
            date: '04-06-2014',
            value: 6
        }
    ],
    xkey: 'date',
    ykeys: ['value'],
    labels: ['Orders']
});
</script>
@stop