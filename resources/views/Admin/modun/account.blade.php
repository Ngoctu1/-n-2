@extends('Admin.master')

@section('content')
<div class="card" style="float: right;" >
    <div class="card-body" >
        <h4 class="card-title">Basic Table</h4>
        <p class="card-description"> Add class <code>.table</code>
        </p>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Level</th>
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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop