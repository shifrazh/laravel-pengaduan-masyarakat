<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\Auth;

class LoginPetugasController extends Controller
{
    public function index(){
         
        return view('loginpetugas');
    }
public function login(Request $request){

    $data = $request->only('username', 'password');
    if (Auth::guard("petugas")->attempt($data)){
        echo redirect("/petugas/login")->with("error", "username atau password salah");
    }else {
        return redirect("/petugas/login");
        }
}
function logout(){
    Auth::guard("petugas")->logout();
    return redirect('petugas.home');
}
public function home(){
    return view('petugas.home');
} 
}


