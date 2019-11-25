@extends('layouts.app')
@section('title','view')
@section('content')
 <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
          <div class="page-title-box">
            <div class="float-right"> </div>
            <h4 class="page-title">User Add</h4>
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
      <div class="row">
       
        <div class="card col-sm-12">
          <div class="card-body"> 
          

        {{ Form::open(['id' => 'user_form', 'method' => 'post', 'route'=> 'usersave']) }}
          {{csrf_field()}} 
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-1 col-form-label">NAME</label>
            <div class="col-sm-5">
               {{ Form::text('name', '', ['id'=>'name', 'class'=>'form-control','placeholder'=>'Name' ]) }}  

            </div>
            <label for="example-text-input" class="col-sm-1 col-form-label">USER NAME</label>
            <div class="col-sm-5">
              {{ Form::text('username', '', ['id'=>'username', 'class'=>'form-control','placeholder'=>'Username','required']) }}
            </div>
        </div>
        <div class="form-group row">
             <label for="example-text-input" class="col-sm-1 col-form-label">PASSWORD</label>
             <div class="col-sm-5">
                  {{ Form::password('password', ['id'=>'password', 'class'=>'form-control','placeholder'=>'Password','required']) }}
              </div>
              <label for="example-text-input" class="col-sm-1 col-form-label">CONFIRM PASSWORD</label>
              <div class="col-sm-5">
                    {{ Form::password('password_confirmation',['id'=>'password_confirmation', 'class'=>'form-control','placeholder'=>'Confirm Password','required']) }}
              </div>
        </div> 
        <div class="form-group row">
             <label for="example-text-input" class="col-sm-1 col-form-label">EMAIL ID</label>
              <div class="col-sm-5">
               {{ Form::email('email', '', ['id'=>'email', 'class'=>'form-control','placeholder'=>'Email','required']) }}
              </div>
              <label for="example-text-input" class="col-sm-1 col-form-label">MOBILE NO</label>
              <div class="col-sm-5">
                  {{ Form::text('mobile_no', '', ['id'=>'mobile_no', 'class'=>'form-control','placeholder'=>'Mobile No.','required']) }}
              </div>
        </div>  
         <div class="form-group row">
            <label class="col-sm-1 col-form-label">ROLES</label>
          <div class="col-sm-5">
               {{ Form::select('role', ['' => 'Select', '1' => 'Super Admin', '2' => 'Admin', '3' => 'User'], null, ['class'=>'form-control','required']) }}
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
       <!-- end row -->
@endsection
@section('footer_script')
<script>
    $(document).ready(function () {
    $('#user_form').validate({ // initialize the plugin
        rules: {
            name: {
                required: true
            },
            username: {
                required: true
            },
            password: {
                required: true,
                minlength: 8
            },
            password_confirmation: {
                required: true,
                minlength: 8,
                equalTo: "#password"
            },
            email: {
                required: true,
                email: true
            },
            mobile_no: {
                required: true,
                digits:true,
                minlength: 10,
                maxlength: 15,

            },
            role: {
                required: true,
            }
        },
        messages: {
            name: {
                required: "Name is Required"
            },
            username: {
                required: "Username is Required"
            },
            password: {
                required: "Password is Required",
                minlength: "Password should be minimum 8 characters",
            },
            password_confirmation: {
                required: "Please Confirm the Password",
                equalTo:"password did not match"
            },
            email: {
                required:"Email is Required",
                email: "Please Enter valid Email Address"
                
            },
            mobile_no: {
                required: "Mobile number is Required",
                minlength: "Mobile Number should be Minimum 10 digits",
                maxlength: "Please enter a valid Mobile Number.",
                digits: "Please enter only numbers"
            },
            role: {
                required: "Please Select This Field"
            }
        },
        errorPlacement: function (error, element) {
              error.insertAfter(element);
      },
        
    });
});
</script>
@endsection