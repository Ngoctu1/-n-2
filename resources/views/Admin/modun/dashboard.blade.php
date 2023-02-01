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
                        <h2 class="mb-5">{{number_format($revenue)}} Đ</h2>

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
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Tickets</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> Assignee </th>
                                        <th> Subject </th>
                                        <th> Status </th>
                                        <th> Last Update </th>
                                        <th> Tracking ID </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/images/faces/face1.jpg" class="me-2" alt="image"> David
                                            Grey
                                        </td>
                                        <td> Fund is not recieved </td>
                                        <td>
                                            <label class="badge badge-gradient-success">DONE</label>
                                        </td>
                                        <td> Dec 5, 2017 </td>
                                        <td> WD-12345 </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/faces/face2.jpg" class="me-2" alt="image"> Stella
                                            Johnson
                                        </td>
                                        <td> High loading time </td>
                                        <td>
                                            <label class="badge badge-gradient-warning">PROGRESS</label>
                                        </td>
                                        <td> Dec 12, 2017 </td>
                                        <td> WD-12346 </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/faces/face3.jpg" class="me-2" alt="image"> Marina
                                            Michel
                                        </td>
                                        <td> Website down for one week </td>
                                        <td>
                                            <label class="badge badge-gradient-info">ON HOLD</label>
                                        </td>
                                        <td> Dec 16, 2017 </td>
                                        <td> WD-12347 </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/faces/face4.jpg" class="me-2" alt="image"> John Doe
                                        </td>
                                        <td> Loosing control on server </td>
                                        <td>
                                            <label class="badge badge-gradient-danger">REJECTED</label>
                                        </td>
                                        <td> Dec 3, 2017 </td>
                                        <td> WD-12348 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Updates</h4>
                        <div class="d-flex">
                            <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                                <i class="mdi mdi-account-outline icon-sm me-2"></i>
                                <span>jack Menqu</span>
                            </div>
                            <div class="d-flex align-items-center text-muted font-weight-light">
                                <i class="mdi mdi-clock icon-sm me-2"></i>
                                <span>October 3rd, 2018</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6 pe-1">
                                <img src="assets/images/dashboard/img_1.jpg" class="mb-2 mw-100 w-100 rounded"
                                    alt="image">
                                <img src="assets/images/dashboard/img_4.jpg" class="mw-100 w-100 rounded" alt="image">
                            </div>
                            <div class="col-6 ps-1">
                                <img src="assets/images/dashboard/img_2.jpg" class="mb-2 mw-100 w-100 rounded"
                                    alt="image">
                                <img src="assets/images/dashboard/img_3.jpg" class="mw-100 w-100 rounded" alt="image">
                            </div>
                        </div>
                        <div class="d-flex mt-5 align-items-top">
                            <img src="assets/images/faces/face3.jpg" class="img-sm rounded-circle me-3" alt="image">
                            <div class="mb-0 flex-grow">
                                <h5 class="me-2 mb-2">School Website - Authentication Module.</h5>
                                <p class="mb-0 font-weight-light">It is a long established fact that a reader will be
                                    distracted by the readable content of a page.</p>
                            </div>
                            <div class="ms-auto">
                                <i class="mdi mdi-heart-outline text-muted"></i>
                            </div>
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
            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-white">Todo</h4>
                        <div class="add-items d-flex">
                            <input type="text" class="form-control todo-list-input"
                                placeholder="What do you need to do today?">
                            <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
                                id="add-task">Add</button>
                        </div>
                        <div class="list-wrapper">
                            <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Meeting with Alisa </label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked> Call John </label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Create invoice </label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Print Statements </label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked> Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                            </ul>
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