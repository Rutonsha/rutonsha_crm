<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    // protected $fillable = [
    //     'first_name', 'middle_name', 'last_name', 'email_id', 'mobile_no', 'alternate_mobile_no', 'dob', 'house_no', 'street_address', 'city_id', 'state_id', 'zipcode', 'unit_no', 'no_of_tvs', 'no_of_dvr', 'ssn', 'ssn_expdate', 'issued_state', 'card_no', 'card_expdate', 'cvv_no', 'sp_id', 'security_pin', 'autopay', 'install_date', 'install_slot', 'install_timing', 'status_info', 'call_info', 'status'
    // ];

    public function state(){
    	return $this->belongsTo('App\State','state_id','id');

    }

    public function city(){
    	return $this->belongsTo('App\City','city_id','id');

    }
}
