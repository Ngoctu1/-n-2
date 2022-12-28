@extends('Admin.master')

@section('detail')
   
    <div class="card" style="float: right; width: 72%; margin-right: 7%">
                  <div class="card-body">
                    <h4 class="card-title">Edit User</h4>
                    <br>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Username</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="{{ $user-> name}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="{{ $user->email }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="{{ $user-> password }}">
                      </div>
                      <div class="form-group">
                        <label for="">PhoneNumber</label>
                        <input type="text" class="form-control" id="" placeholder="{{ $user->phone }}">
                      </div>
                      <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" id="" placeholder="{{ $user->address }}">
                      </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Remember me </label>
                      </div>
                      <button href="{{route('account.edit',['id'=> $user->id])}}" class="btn btn-light" style="background-color: #c4f0c4; color: black">Edit</button>
                      <button class="btn btn-light"style="background-color: #f85766; color: black" >delete</button>
                    </form>
                  </div>
                </div>
@stop