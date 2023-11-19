<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\DB;
use Illuminate\Http\Support\Facades\Hash;
class MasyarakatController extends Controller
{
    function table_masyarakat(){
        $masyarakat =  DB::table('masyarakat')->get();
        return view('table_masyarakat', ['masyarakat'=> $masyarakat]);
        
    }
    function register (request $request){
        $nik = $request->nik;
        $nama = $request->nama;
        $username = $request->username;
        $password = $request->password;
        $telp = $request->telp;

       DB ::table('masyarakat')->insert([
            'nik'=> $nik,
            'nama'=> $nama,
            'username'=> $username,
            'password'=> $password,
            'telp' => $telp,
        ]);

        return redirect('/register');
    }
}