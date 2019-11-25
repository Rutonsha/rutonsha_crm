<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use App\Serviceprovider;
use App\State;
use App\Question;
use App\City;
use App\Leadanswer;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LeadExport;
use DB;

class LeadController extends Controller
{
    public function get(){

        $leads = Lead::get();
        return view('lead/list',compact('leads'));
    }
    public function add(){

        $service_providers = Serviceprovider::pluck('name','id')->prepend('Select','');
        $states = State::pluck('name','id')->prepend('Select','');

    	return view('lead/add',compact('service_providers','states'));
    }
    public function edit($id){

    	return view('lead/edit');
    }

    public function update_status(Request $request){

        if(!empty($request->id)){
            $lead = Lead::findOrFail($request->id);
            $lead->status = $request->status;
            $msg = "Activation Done Status Updated Successfully";
            if(!empty($request->status) && $request->status=='1' && !empty($request->remarks)){
                $lead->remarks = $request->remarks;
                $msg = "Pending Status Updated Successfully";
            }
            $lead->save();
        }
        return $msg;
    }

    public function get_questions(Request $request){

        $ques = Question::where('sp_id', $request->sp_id)->get();    
        //return response()->json(['status'=> 'success','status_code'=>'200','sq_div'=>$sq_div]);
        return view('lead/sp_ajax',compact('ques'));
    }

    public function get_cities(Request $request){

        $cities = City::where('state_id', $request->state_id)->get();    
        //return response()->json(['status'=> 'success','status_code'=>'200','sq_div'=>$sq_div]);
        return view('lead/state_ajax',compact('cities'));
    }


    public function save(Request $request){//dd($request->all());

    	$request->validate([
		    'first_name' => 'required',
		    'last_name' => 'required',
		    'middle_name' => 'required',
		    'email_id' => 'required|email|unique:leads|max:255',
		    //'mobile_no' => 'required|min:10',
		    
		]);
        //dd($request->all());
		if(!empty($request->id)){
			$lead = Lead::findOrFail($request->id);
		}else{
			$lead = new Lead;
		}
    	$lead->first_name = $request->first_name;
    	$lead->middle_name = $request->middle_name;
    	$lead->last_name = $request->last_name;
    	$lead->email_id = $request->email_id;
    	$lead->mobile_no = $request->mobile_no;
    	$lead->alternate_mobile_no = $request->alternate_mobile_no;
    	$lead->dob = date('Y-m-d',strtotime($request->dob));
    	$lead->house_no = $request->house_no;
    	$lead->street_address = $request->street_address;
    	$lead->city_id = $request->city_id;
    	$lead->state_id = $request->state_id;
    	$lead->zipcode = $request->zipcode;
    	$lead->unit_no = $request->unit_no;
    	$lead->no_of_tvs = $request->no_of_tvs;
    	$lead->no_of_dvr = $request->no_of_dvr;
    	$lead->ssn = $request->ssn;
    	$lead->ssn_expdate = $request->ssn_expdate;
    	$lead->issued_state = $request->issued_state;
    	$lead->card_no = $request->card_no;
    	$lead->card_expdate = $request->card_expdate;
    	$lead->cvv_no = $request->cvv_no;
    	$lead->sp_id = $request->sp_id;
    	$lead->security_pin = $request->security_pin;
    	$lead->autopay = $request->autopay;
    	$lead->install_date = date('Y-m-d', strtotime($request->installation_date));
    	$lead->install_slot = $request->install_slot;
    	$lead->install_timing = $request->install_timing;
    	$lead->status_info = $request->status_info;
    	$lead->call_info = $request->call_info;
    	$lead->status = 0;
        //dd($lead);
    	$lead->save();

        if(count((array)$request->sq) > 0){
            foreach($request->sq as $key=>$val){
                if(!empty($request->sq_ans[$key])){

                    $lead_ans =  Leadanswer::firstOrNew(['lead_id' => $lead->id, 'question_id' => $val]);
                    //$lead_ans->lead_id = $lead->id;
                    //$lead_ans->question_id = $val;
                    $lead_ans->answer = $request->sq_ans[$key];
                    $lead_ans->save();
                }
            }
        }

    	//dd('shdjf');
    	return redirect()->route('leadlist');
    }

    public function export(){
        
        $date = date('d_m_Y');
        return Excel::download(new LeadExport,'Leads_Report'.$date.'.xlsx');
    }

    public function delete($id){
    	
		$lead = Lead::find($id);
    	$lead->delete();
    	return redirect()->route('lead/list');
    }
}
