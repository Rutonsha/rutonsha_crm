@extends('layouts.app')
@section('title','view')
@section('content')
<!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <div class="page-title-box">
            <div class="float-right"> </div>
            <h4 class="page-title">Leads List</h4>
          </div>
        </div>
      </div>
      <!-- end page title end breadcrumb -->
      <div class="row">
        <!-- <ul class="nav nav-pills nav-justified" role="tablist">
          <li class="nav-item waves-effect waves-light"> <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab">Views </a> </li>
        </ul> -->
        <div class="card col-sm-12">
          <div class="card-body"> 
            
            <!-- Nav tabs --> 
            
            <!-- Tab panes -->
      <div class="tab-content">
          <div class="tab-pane active p-3" id="home-1" role="tabpanel">
              <p class="font-13 mb-0">
              <div class="card-body">

              <!-- <h5 class="mt-0">Download</h5> -->
              <a href="{{route('leadexport')}}"><button type="button" name="export_lead" class="btn btn-primary px-4">Export Excel</button></a>

              <a style="float: right;" href="{{route('leadadd')}}"><button type="button" name="add_lead" class="btn btn-primary px-4">Add Leads</button></a>

                  <div class="table-responsive">
                      <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                          <thead>
                              <tr>
                                  <th>First Name</th>
                                  <th>Middle Name</th>
                                  <th>Last Name</th>
                                  <th>Phone Number</th>
                                  <th>Alternative Number</th>
                                  <th>Email id</th>
                                  <th>Zipcode</th>
                                  <th>Address</th>
                                  <th>City</th>
                                  <th>State</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($leads as $lead)
                              <tr>
                                  <td>{{$lead->first_name}}</td>
                                  <td>{{$lead->middle_name}}</td>
                                  <td>{{$lead->last_name}}</td>
                                  <td>{{$lead->mobile_no}}</td>
                                  <td>{{$lead->alternate_mobile_no}}</td>
                                  <td>{{$lead->email_id}}</td>
                                  <td>{{$lead->zipcode}}</td>
                                  <td><?php echo $lead->house_no.','.$lead->street_address.','.$lead->city->name.','.$lead->state->name; ?></td>
                                  <td>{{$lead->city->name}}</td>
                                  <td>{{$lead->state->name}}</td>
                                  <td>
                                    @if($lead->status == 0)
                                  <button class="upd_status btn btn-sm btn-primary tippy-btn" title="Active" data-tippy-placement="top-end" data_index="2" lead_index="{{ $lead->id}}"><i class="mdi mdi-check-circle-outline"></i></button>
                                  <button class="upd_remark btn btn-sm btn-danger  tippy-btn" title="Pending" data-tippy-placement="top-end" data-toggle="modal" data-target="#myModal" data_index="1" lead_index="{{ $lead->id}}"><i class="mdi mdi-close-circle-outline"></i></button>
                                    @elseif($lead->status == 1)
                                      <span style="color:#ff0000"><b>Pending</b></span>
                                    @elseif($lead->status == 2)
                                      <span style="color:#00ff00"><b>Activation Done</b></span>
                                    @endif
                                  </td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <input type="hidden" name="lead_id" id="lead_id" value="">
                                  <input type="hidden" name="lead_status" id="lead_status" value="">
                                  <h5 class="modal-title align-self-center mt-0" id="myModalLabel">Reason Update for Pending Status</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                              </div>
                          <div class="modal-body">
                              <h4>Remarks</h4>
                              <textarea name="remarks" id="remarks" class="form-control" row="10"></textarea>
                          </div>
                          <div class="modal-footer">
                          <button id="close_remarks" type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                          <button type="button" id="submit_remarks" class="btn btn-primary waves-effect waves-light">Submit</button>
                          </div>
                          </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                  </div>
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
  var list_url = "{{ route('leadlist')}}";
  var update_url = "{{ route('leadupdsts')}}";
  function update_status(url,id,status,remarks){
    $.ajax({
          method:'get',
          url: url, 
          data:{
            id: id,
            status: status,
            remarks: remarks,
          },
          success: function(result) { //alert('ddd'); console.log(result);
            //alert(result);
            $.notify(result, "success");
            window.location.href=list_url;
          }
        });
  }
  
  $(document).ready(function() {
      $('.upd_status').on('click',function(){
        var sts_val = $(this).attr('data_index');
        var lead_id = $(this).attr('lead_index');
        update_status(update_url,lead_id,sts_val,'');
      });

      $('.upd_remark').on('click',function(){
        var sts_val = $(this).attr('data_index');
        var lead_id = $(this).attr('lead_index');
        $('#lead_id').val(lead_id);
        $('#lead_status').val(sts_val);
      });

      $('#submit_remarks').on('click',function(){
        var sts_val = $('#lead_status').val();
        var lead_id = $('#lead_id').val();
        var remarks = $('#remarks').val();
        update_status(update_url,lead_id,sts_val,remarks);
      });

      $('#close_remarks').on('click',function(){
        $('#lead_status').val('');
        $('#lead_id').val('');
        $('#remarks').val('');
      });
     
  });
</script>
@endsection