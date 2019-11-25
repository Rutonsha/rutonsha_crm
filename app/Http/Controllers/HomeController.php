<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::id();
        $user = User::where('id',$user_id)->first();
        Session(['user_id'=>$user_id]);
        Session(['email_id'=>$user->email]);
        Session(['role'=>$user->role]);
        if($user->role == 3){
            return redirect()->route('leadadd');
        }else if($user->role == 2){
            return redirect()->route('userlist');
        }else if($user->role == 1){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login');
        }
        //return view('home');
    }

}
