<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\facades\Hash;
use Illuminate\Support\facadees\Session;
use App\Http\Controllers\Controller;
class login1Controller extends Controller
{
function index(){
    
    return view("login1");
}
function login(Request $request){
    $datalogin = $request->only("username", "password");
   if (Auth::attempt($datalogin)){
    return redirect ("/home");
   }else{
    return redirect ("/login1");
    }
}
function logout(){
    Auth::logout();

    return redirect("/logout");
}
}

