@extends('layouts.app')
@section('title','User List')
@section('content')
<!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <div class="page-title-box">
            <div class="float-right"> </div>
            <h4 class="page-title">User List</h4>
          </div>
        </div>
      </div>
      <!-- end page title end breadcrumb -->
      <div class="row">
        
        <div class="card col-sm-12">
          <div class="card-body"> 

            <!-- Nav tabs --> 
            
            <!-- Tab panes -->
      <div class="tab-content">
          <div class="tab-pane active p-3" id="home-1" role="tabpanel">
              <p class="font-13 mb-0">
              <div class="card-body">

                <a href="{{route('useradd')}}"><button type="button" name="user_add" class="btn btn-primary px-4">Add User</button></a>

              <h5 class="mt-0"></h5>

                  <div class="table-responsive">
                      <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                          <thead>
                              <tr>
                                  <th>Name</th>
                                  <th>User Name</th>
                                  <th>Email</th>
                                  <th>Mobile No.</th>
                                  <th>Role</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($users as $user)
                              <tr>
                                  <td>{{$user->name}}</td>
                                  <td>{{$user->username}}</td>
                                  <td>{{$user->email}}</td>
                                  <td>{{$user->mobile_no}}</td>
                                  <td>{{$user->role}}</td>
                                  <td>
                                  <a href="{{ route('useredit',['id'=>$user->id]) }}"><button class="btn btn-sm btn-primary tippy-btn" title="Edit" data-tippy-placement="top-end">Edit</button></a>
                                  </td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </p>
          </div>

      </div>
        </div>
      </div>
      <!-- end row --> 
@endsection