@extends('layouts.app')
@section('title','view')
@section('content')
 <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
          <div class="page-title-box">
            <div class="float-right"> </div>
            <h4 class="page-title">Edit User</h4>
          </div>
        </div>
      </div>
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

       <!-- end page title end breadcrumb -->
      <div class="container"> 
      <div class="row">
       
        <div class="card col-sm-12">
          <div class="card-body"> 
            <div class="p-50"> 

        {{ Form::open(['id' => 'user_form', 'method' => 'post', 'route'=> 'userupdate']) }}
          {{csrf_field()}} 
          <input type="hidden" name="id" value="{{$users->id}}">
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-1 col-form-label">NAME</label>
            <div class="col-sm-5">
               {{ Form::text('name',$users->name, ['id'=>'name', 'class'=>'form-control','placeholder'=>'Name','required' ]) }}       
            </div>
            <label for="example-text-input" class="col-sm-1 col-form-label">USER NAME</label>
            <div class="col-sm-5">
              {{ Form::text('username', $users->username, ['id'=>'username', 'class'=>'form-control','placeholder'=>'Username','required']) }}
            </div>
        </div>
         
        <div class="form-group row">
             <label for="example-text-input" class="col-sm-1 col-form-label">EMAIL ID</label>
              <div class="col-sm-5">
               {{ Form::email('email', $users->email, ['id'=>'email', 'class'=>'form-control','placeholder'=>'Email','required']) }}
              </div>
              <label for="example-text-input" class="col-sm-1 col-form-label">MOBILE NO</label>
              <div class="col-sm-5">
                  {{ Form::text('mobile_no', $users->mobile_no, ['id'=>'mobile_no', 'class'=>'form-control','placeholder'=>'Mobile No.','required']) }}
              </div>
        </div>  
         <div class="form-group row">
            <label class="col-sm-1 col-form-label">ROLES</label>
          <div class="col-sm-5">
              {{ Form::select('role', ['Super Admin' => 'Super Admin', 'Admin' => 'Admin'], $users->role, ['placeholder' => 'Select', 'class'=>'form-control','required']) }}
          </div>
         </div> 
         <div class="form-group row">
            <div class="col-sm-5">
              <button type="submit" name="user_submit" class="btn btn-primary px-4">Submit</button>
            </div>
           
         </div>        
        </div>
         {{ Form::close() }}         
        </div>
      </div>
      </div>
    </div>
       <!-- end row -->
@endsection