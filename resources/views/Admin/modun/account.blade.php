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
                
                @foreach($user1 as $user1)
                @if($user1->status == 0)
                <tr>
                    <td>{{$user1->id}}</td>
                    <td>{{ $user1->name}}</td>
                    <td>{{ $user1->email}}</td>
                    <td>{{$user1->address}}</td>
                    <td>{{ $user1->phone}}</td>
                    <td>@if($user1 -> level == 1)
                        <p class="badge badge-danger"> Admin</p>
                        @else
                        <p class="badge badge-success">Member</p>
                        @endif
                    </td>                
                    <td style="padding-left: 48px"><a href="{{route('account.detail',['id'=> $user1->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true" width = "50px"></i></td>

                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop