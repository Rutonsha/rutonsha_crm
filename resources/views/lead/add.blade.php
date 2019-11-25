@extends('layouts.app')
@section('title', 'Lead Entry Form')
@section('content')       
  <!-- Page-Title -->
  <div class="row">
    <div class="col-sm-12">
      <div class="page-title-box">
        <div class="float-right"> </div>
        <h4 class="page-title">Lead Details</h4>
      </div>
    </div>
  </div>
  <!-- end page title end breadcrumb -->
  <div class="row">
    <button type="button" name="export_lead" class="btn btn-primary px-4" data-toggle="modal" data-target="#myModal">Check Service Providers</button>
  </div>
  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title align-self-center mt-0" id="myModalLabel">Check Service Provider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
        <div class="modal-body">
            <iframe src="http://homeperks.com/shop/tv/" width="100%" height="600px"></iframe>
        </div>
        
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <br>
  <div class="row">
    <!-- <ul class="nav nav-pills nav-justified" role="tablist">
      <li class="nav-item waves-effect waves-light"> <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab">Entry </a> </li>
      
    
    </ul> -->
    <div class="card col-sm-12">
      <div class="card-body"> 
        
        <!-- Nav tabs --> 
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active p-3" id="home-1" role="tabpanel">
            <p class="font-13 mb-0">
       {{ Form::open(['id' => 'lead_form', 'method' => 'post', 'route'=> 'leadsave']) }}
        {{ csrf_field() }}
            <div class="row">
              <div class="col-md-12 col-lg-6">
                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">WHAT IS YOUR HOUSE NO ?</label>
                  </div>

                   <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">HOUSE NO</label>
                    <div class="col-sm-8">
                      {{ Form::text('house_no', '', ['id'=>'house_no', 'class'=>'form-control', 'placeholder'=>'Enter House No.','required']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">WHAT IS YOUR STREET ADDRESS ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">STREET ADDRESS</label>
                    <div class="col-sm-8">
                      {{ Form::text('street_address', '', ['id'=>'street_address', 'class'=>'form-control', 'placeholder'=>'Enter Street Address','required']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">WHAT IS YOUR ZIP CODE ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">ZIP CODE</label>
                    <div class="col-sm-8">
                      {{ Form::text('zipcode', '', ['id'=>'zipcode', 'class'=>'form-control', 'placeholder'=>'Enter Zipcode']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">WHAT IS YOUR UNIT NO ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">UNIT NO</label>
                    <div class="col-sm-8">
                      {{ Form::text('unit_no', '', ['id'=>'unit_no', 'class'=>'form-control', 'placeholder'=>'Enter Unit No.','required']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">HOW MANY TV'S DO YOU HAVE ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">NO OF TV's</label>
                    <div class="col-sm-8">
                      {{ Form::text('no_of_tvs', '', ['id'=>'no_of_tvs', 'class'=>'form-control', 'placeholder'=>'Enter No. of TVs','required']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">HOW MANY DVR DO YOU HAVE ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">NO OF DVR</label>
                    <div class="col-sm-8">
                      {{ Form::text('no_of_dvr', '', ['id'=>'no_of_dvr', 'class'=>'form-control', 'placeholder'=>'Enter No. of DVR','required']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">WHAT TYPE OF WIFI ROUTER DO YOU HAVE ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">WIFI ROUTER(RENT OR GET ONE)</label>
                    <div class="col-sm-8">
                      {{ Form::text('wifi_router', '', ['id'=>'wifi_router', 'class'=>'form-control', 'placeholder'=>'Enter Wifi Router']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">WHAT IS YOUR HOUSE PHONE NO ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">HOME PHONE NO</label>
                    <div class="col-sm-8">
                      <div class="form-group">
                        {{ Form::text('phone_no', '', ['id'=>'phone_no', 'class'=>'form-control', 'placeholder'=>'Enter Phone No','required']) }}
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">WHAT IS YOUR MOBILE NO ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">MOBILE NO</label>
                    <div class="col-sm-8">
                      <div class="form-group">
                        {{ Form::text('mobile_no', '', ['id'=>'mobile_no', 'class'=>'form-control', 'placeholder'=>'Enter Mobile No','required']) }}
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">WHAT IS YOUR ALTERNATE MOBILE NO ?</label>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">ALTERNATE MOBILE NO</label>
                    <div class="col-sm-8">
                      <div class="form-group">
                        {{ Form::text('alternate_mobile_no', '', ['id'=>'alternate_mobile_no', 'class'=>'form-control', 'placeholder'=>'Enter Alternate Mobile No','required']) }}
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">MAY I KNOW YOUR FIRST NAME ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">FIRST NAME</label>
                    <div class="col-sm-8">
                      {{ Form::text('first_name', '', ['id'=>'first_name', 'class'=>'form-control', 'placeholder'=>'Enter First Name','required']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">MAY I KNOW YOUR MIDDLE NAME ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">MIDDLE NAME</label>
                    <div class="col-sm-8">
                      {{ Form::text('middle_name', '', ['id'=>'middle_name', 'class'=>'form-control', 'placeholder'=>'Enter Middle Name','required']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">MAY I KNOW YOUR LAST NAME ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">LAST NAME</label>
                    <div class="col-sm-8">
                      {{ Form::text('last_name', '', ['id'=>'last_name', 'class'=>'form-control', 'placeholder'=>'Enter Last Name','required']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">MAY I KNOW YOUR EMAIL ID ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">EMAIL ID</label>
                    <div class="col-sm-8">
                      {{ Form::text('email_id', '', ['id'=>'email_id', 'class'=>'form-control', 'placeholder'=>'Enter Email ID','required']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">WHAT IS YOUR DATE OF BIRTH ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">DATE OF BIRTH</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control datepick" placeholder="mm/dd/yyyy" name="dob" id="datepicker" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">WHAT SERVICE PROVIDER DO YOU HAVE ?</label>
                  </div>

                  <div class="form-group row"><label class="col-sm-4 col-form-label">SERVICE PROVIDER </label>
                    <div class="col-sm-8">
                    {{ Form::select('sp_id', $service_providers, null, ['class' => 'form-control', 'id' => 'sp_id','required']) }}  
                    </div>
                  </div>
                  <div id="sec_ques_div">
                    
                  </div>
               
              </div>
              <div class="col-md-12 col-lg-6">
                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">WHAT IS YOUR SSN OR DRIVING LICENCE NO ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">SSN OR DRIVING LICENCE AND EXPIRATION DATE</label>
                    <div class="col-sm-8">
                      
                      {{ Form::text('ssn', '', ['id'=>'ssn', 'class'=>'form-control', 'placeholder'=>'Enter SSN or Driving Licence No','required']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">TELL ME YOUR LICENCE EXPIRY DATE ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">LICENCE EXPIRY DATE</label>
                    <div class="col-sm-8">
                      {{ Form::text('ssn_expdate', '', ['id'=>'datepicker-multiple-date', 'class'=>'form-control datepick', 'placeholder'=>'dd/mm/yyyy']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">ON WHICH STATE THE LICENCE HAS BEEN ISSUED ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">ISSUED STATE</label>
                    <div class="col-sm-8">
                      {{ Form::text('issued_state', '', ['id'=>'issued_state', 'class'=>'form-control', 'placeholder'=>'Enter Issued State']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">WHAT IS YOUR CARD NO ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">CARD NO</label>
                    <div class="col-sm-8">
                      {{ Form::text('card_no', '', ['id'=>'card_no', 'class'=>'form-control', 'placeholder'=>'Enter Card No','required']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">WHAT IS THE EXPIRY DATE ON YOUR CARD ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">EXPIRATION DATE ON THE CARD</label>
                    <div class="col-sm-8">
                      {{ Form::text('card_expdate', '', ['id'=>'datepicker-autoclose', 'class'=>'form-control datepick', 'placeholder'=>'mm/yyyy','required']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">MAY I KNOW THE CVV NO ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">CVV NO</label>
                    <div class="col-sm-8">
                      {{ Form::text('cvv_no', '', ['id'=>'cvv_no', 'class'=>'form-control', 'placeholder'=>'Enter CVV No.','required']) }}
                    </div>
                  </div>
               
                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">WHAT IS THE SECURITY PIN OF YOUR CARD ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">SECURITY PIN</label>
                    <div class="col-sm-8">
                      {{ Form::text('security_pin', '', ['id'=>'security_pin', 'class'=>'form-control', 'placeholder'=>'Enter Security PIN','required']) }}
                    </div>
                  </div>
                  <div class="form-group mb-0 row">
                    <label class="col-md-2 my-1 control-label">AUTOPAY</label>
                    <div class="col-md-10">
                      <div class="form-check-inline my-1">
                        <div class="custom-control custom-radio">
                          {{ Form::radio('autopay', '1' ,'true' , ['id'=>'autopay_yes','class'=>'custom-control-input']) }} 
                          <label class="custom-control-label" for="autopay_yes">YES</label>
                        </div>
                      </div>
                      <div class="form-check-inline my-1">
                        <div class="custom-control custom-radio">
                          {{ Form::radio('autopay', '0' ,false , ['id'=>'autopay_no','class'=>'custom-control-input']) }}
                          <!-- <input type="radio" id="autopay_no" name="autopay" class="custom-control-input" value="no"> -->
                          <label class="custom-control-label" for="autopay_no">NO</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">TELL ME THE INSTALLATION DATE ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">INSTALLATION DATE</label>
                    <div class="col-sm-8">
                      {{ Form::text('install_date', '', ['id'=>'install_date', 'class'=>'form-control', 'placeholder'=>'dd/mm/yyyy']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">TELL ME THE INSTALLATION SLOT ?</label>
                  </div>

                  <div class="form-group mb-0 row">
                    <label class="col-md-2 my-1 control-label">INSTALLATION SLOTS</label>
                    <div class="col-md-10">
                      <div class="form-check-inline my-1">
                        <div class="custom-control custom-radio">
                          {{ Form::radio('install_slot', 'morning' , true, ['id'=>'install_slot_morn','class'=>'custom-control-input']) }}
                          <!-- <input type="radio" id="customRadio7" name="customRadio" class="custom-control-input"> -->
                          <label class="custom-control-label" for="install_slot_morn">MORNING</label>
                        </div>
                      </div>
                      <div class="form-check-inline my-1">
                        <div class="custom-control custom-radio">
                          {{ Form::radio('install_slot', 'afternoon' , false, ['id'=>'install_slot_aftn','class'=>'custom-control-input']) }}
                          <!-- <input type="radio" id="customRadio8" name="customRadio" class="custom-control-input"> -->
                          <label class="custom-control-label" for="install_slot_aftn">AFTER NOON</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">CAN YOU TELL ME THE INSTALLATION TIMING ?</label>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">INSTALLATION TIMING</label>
                    <div class="col-sm-8">
                      {{ Form::text('install_timing', '', ['id'=>'install_timing', 'class'=>'form-control', 'placeholder'=>'hh:mm am/pm']) }}
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">WHICH STATE DO YOU BELONGS TO ?</label>
                  </div>

                  <div class="form-group row"><label class="col-sm-4 col-form-label">STATE</label>
                    <div class="col-sm-8">
                    {{ Form::select('state_id', $states, null, ['class' => 'form-control', 'id' => 'state_id','required']) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-12 my_class">WHICH CITY DO YOU BELONGS TO ?</label>
                  </div>

                  <div class="form-group row"><label class="col-sm-4 col-form-label">CITY </label>
                    <div class="col-sm-8" id="city_div">
                    <select class="form-control" name="city_id" id="city_id" required>
                        <option>Select</option>
                    </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">STATUS INFO</label>
                    <div class="col-sm-8">
                      {{ Form::text('status_info', '', ['id'=>'status_info', 'class'=>'form-control', 'placeholder'=>'Enter Status Info']) }}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">CALL INFO</label>
                    <div class="col-sm-8">
                      {{ Form::text('call_info', '', ['id'=>'call_info', 'class'=>'form-control', 'placeholder'=>'Enter Call Info']) }}
                    </div>
                  </div>
             
              </div>
              <button type="submit" name="lead_submit" class="btn btn-primary px-4">Submit</button>
              {{ Form::close() }}
            </div>
            </p>
          </div>
        
      </div>
    </div>
  </div>
  <!-- end row --> 
@endsection
@section('footer_script')
<script type="text/javascript">
  var sp_url = "{{ route('getques')}}";
  var state_url = "{{ route('getcity')}}";
  
  $(document).ready(function() {
      $('#sp_id').on('change',function(){
        var spid = $("#sp_id option:selected").val();
         $.ajax({
          method:'get',
          url: sp_url, 
          data:{
            sp_id: spid,
          },
          success: function(result) { //alert('ddd'); console.log(result);
            $("#sec_ques_div").html(result); 
          }
        }); 
      });

      $('#state_id').on('change',function(){
        var stateid = $("#state_id option:selected").val();
         $.ajax({
          method:'get',
          url: state_url, 
          data:{
            state_id: stateid,
          },
          success: function(result) { //alert('wwww'); console.log(result);
            $("#city_div").html(result); 
          }
        }); 
      });
  });
</script>
@endsection
