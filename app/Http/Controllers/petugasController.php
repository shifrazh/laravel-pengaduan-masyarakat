<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PetugasController extends Controller
{
    function table(){
       
           $petugas = DB::table('petugas')->get();
           return view('table_petugas', ['petugas' => $petugas]);
        }


    function register_petugas(request $request){

        $id_petugas = $request->id_petugas;
        $nama_petugas = $request->nama_petugas;
        
        $username = $request->username;
        $password = $request->password;
        $telp = $request->telp;
       


       
        DB::table('petugas')->insert([
            'id_petugas' => $id_petugas,
            'nama_petugas' => $nama_petugas,
            'username' => $username,
            'password' => $password,
            'telp' => $telp,
          
        ]);

        return redirect('/login');
    }


     function registerpetugas(){
           return view('register_petugas');
        }
}