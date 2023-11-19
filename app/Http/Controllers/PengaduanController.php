<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Login1;
use Illuminate\Support\Facades\update;

class PengaduanController extends Controller
{

    function index(){
// query builder
// $pengaduan = DB::table ('pengaduan')->get();
// Elloquent ORM
$pengaduan = pengaduan::all();

    $judul = "Selamat Datang";
    $pengaduan = DB::table('pengaduan')->get();
 

    return view('home', ['judul' => $judul, 'pengaduan' => $pengaduan]);
    

   }

   function tampil_pengaduan(){
    return view ('isi_pengaduan');
  }
  }

  function proses_tambah_pengaduan(Request $request){
//validasi
$nama_foto = $request->foto->getClientOriginalName();

$request->validate([
  'isi_laporan' => 'required'
]);
// Nyimpan foto / Mindahin foto
$request->foto->storeAs('public/image', $nama_foto);
  // $isi_pengaduan = $POST['isi_laporan'];
  $isi_pengaduan = $request->isi_laporan;

  DB::table('pengaduan')->insert([
    'tgl_pengaduan' => date('Y-m-d'),
    'nik' =>'',
    'isi_laporan' => $isi_pengaduan,
    'foto' => $request->fotogetClientOriginalName(),
    'status' => '0'

  ]);
  return redirect('/home');
}

function hapus($id){
  DB::table('pengaduan')->where('id_pengaduan', '=', $id)->delete();
}

  function detail ($id){
    $Pengaduan = Pengaduan::where ('id_pengaduan', $id)->first();
    //$Tanggapan = Tanggapan::where ('id_pengaduan', $id)->get();
    $tanggapan = DB::table('tanggapan')
    ->join('petugas', 'petugas.id', '=', 'tanggapan.id_petugas')
    ->where('tanggapan.id_pengaduan', $id)
    ->get();
// select from tanggapan Join petugas
    // return $tanggapan;
    return view("detail_pengaduan", ["data"=> $pengaduan, 'tanggapan' => $tanggapan ]);

    $pengaduan= DB::table('pengaduan')
                ->where('id_pengaduan', '=', $id)
                ->first();
    
  }

function update($id){
    DB ::table('pengaduan')
  ->where('id_pengaduan, $id')
  ->update(['isi_laporan' => "isi laporan Update"]);
}

function login1(){
  return view ('login1');
}

function about(){
  return view ('about');
}
function pengaduan(){
  return view ('halaman_pengaduan');
}
function hasillaporan(){
  return view ('hasil_laporan');
}

