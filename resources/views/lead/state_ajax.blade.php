<select class="form-control" name="city_id" id="city_id" required>
  <option>Select</option>
  @if(count($cities)>0)
    @foreach($cities as $key=>$val)
      <option value="{{ $val->id }}">{{ $val->name }}</option>
    @endforeach
  @endif
</select>