<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function submit(Request $req){
    	$users = new User;
    	$users->name=$req->name;
    	$users->email=$req->email;
    	$users->contact=$req->contact;
       	$users->province=$req->province;
    	$users->message=$req->message;
    	$users->save();
    	return "<center><h1>Request Has Been Submitted</h1></center>";


    }
}
