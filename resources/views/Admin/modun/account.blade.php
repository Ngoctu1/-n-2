@extends('Admin.master')

@section('content')
<div class="card" style="float: right; width: 80%"  >
    <div class="card-body" style="" >
        
        <h2>Danh Sách Tài Khoản</h2>
        <table class="table">
            <thead>
                <tr class="account-tr">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Level</th>
                    
                    <th>manipulation</th>

                </tr>
            </thead>
            <tbody>
                @foreach($users as $users)
                <tr>
                    <td>{{$users->id}}</td>
                    <td>{{ $users->name}}</td>
                    <td>{{ $users->email}}</td>
                    <td>{{$users->address}}</td>
                    <td>{{ $users->phone}}</td>
                    <td>@if($users -> level == 1)
                        <p class="badge badge-danger"> Admin</p>
                        @else
                        <p class="badge badge-success">Member</p>
                        @endif
                    </td>                
                    <td style="padding-left: 48px"><a href="{{route('users.detail',['id'=> $users->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true" width = "50px"></i></td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop