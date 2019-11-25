@if(count($ques)>0)
  @foreach($ques as $key=>$val)
  <div class="form-group row">
    <label for="security_question1" class="col-sm-2 col-form-label">SECURITY QUESTION {{ $key+1 }}</label>
    <div class="col-sm-10">{{ $val->question }}  
      <input type="hidden" value="{{ $val->id }}" name="sq[]">
    </div>
  </div>
  <div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">ANSWER {{ $key+1 }}</label>
    <div class="col-sm-10">
      <input class="form-control" type="text" value="" name="sq_ans[]" id="sq_ans_$key" placeholder="Enter Answer" required>
    </div>
  </div>
  @endforeach
@endif