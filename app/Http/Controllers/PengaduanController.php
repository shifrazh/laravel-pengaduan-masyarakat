<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\DB;

use App\Models\Pengaduan;


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
    echo "Tampillll";
  }


function proses_tambah_pengaduan(Request $request){
// validasi
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

  function detail_pengaduan ($id){
    $pengaduan= DB::table('pengaduan')
                ->where('id_pengaduan', '=', $id)
                ->first();
    return view("detail_pengaduan", ["data"=> $pengaduan]);
  }

function update($id){
    DB ::table('pengaduan')
  ->where('id_pengaduan, $id')
  ->update(['isi_laporan' => "isi laporan Update"]);
}

function login1(){
  return view ('login1');
}

function register(){
  return view ('register');
}
function about(){
  return view ('about');
}
}