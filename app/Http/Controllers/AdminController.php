<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\User;

class AdminController extends Controller
{
    //
    function login(Request $req)
    {
    	$user= Admin::where(['email'=>$req->email])->first();
    	if(!$user || !Hash::check($req->password,$user->password) ){
    		return "Username or Password not Matched";
    	}
    	else{
    		$req->session()->put('user',$user);
    		return redirect('home');
    	}

    }
    function home()
    {
        $data = User::all();
        return view('home',['collection'=>$data]);

    }
}
