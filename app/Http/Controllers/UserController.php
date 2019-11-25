<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function get(){

        $users = User::get();
        return view('user/list',compact('users'));
    }

    public function add(){

        return view('user/add');
    }
    public function edit(Request $request){ ;
        $users= User::where('id',$request->id)->first();
        return view('user/edit',compact('users'));
    }


    public function save(Request $request){ 

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'mobile_no' => 'required|min:10',
            'password' => 'required|min:8',
        ]);

        if(!empty($request->id)){
            $user = User::findOrFail($request->id);
        }
        else{
            $user = new User;
        }
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password =  Hash::make($request->password);
        $user->email = $request->email;
        $user->mobile_no = $request->mobile_no;
        $user->role = $request->role;
//dd($user);
        $user->save();
        return redirect()->route('userlist');
    }

    public function update(Request $request){
         $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'mobile_no' => 'required|min:10'
            
        ]);
         if(!empty($request->id)){
            $user = User::findOrFail($request->id);
        }
        
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->mobile_no = $request->mobile_no;
        $user->role = $request->role;
//dd($user);
        $user->save();
        return redirect()->route('userlist');
    }

    public function delete($id){
        
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user/list');
    }


}
