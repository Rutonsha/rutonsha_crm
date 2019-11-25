<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use App\User;
use DB;

class DashboardController extends Controller
{
    public function get(){

    	$active_leads = Lead::where('status','=',2)->count();
    	$pending_leads = Lead::where('status','=',1)->count();
    	$remaining_leads = Lead::where('status','=',0)->count();

    	$activ = Lead::select(DB::raw('count(id) as `data`'), DB::raw('YEAR(created_at) as year, MONTH(created_at) as month'))->where('status','=',2)->groupBy('year','month')->get();
    	$pend = Lead::select(DB::raw('count(id) as `data`'), DB::raw('YEAR(created_at) as year, MONTH(created_at) as month'))->where('status','=',1)->groupBy('year','month')->get();
    	

    	$admins = User::where('role','=',2)->count();
    	$users = User::where('role','=',3)->count();

    	$total_leads = Lead::count();

    	return view('dashboard',compact('active_leads','pending_leads','total_leads','remaining_leads','admins','users'));
    }
}
