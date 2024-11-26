<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    public function index(){
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('belajar_laravel')->get();
    	// mengirim data pegawai ke view index
    	return view('index',['pegawai' => $pegawai]);
    }
    public function tambah(){
	    // memanggil view tambah
	    return view('tambah');
    }
    public function store(Request $request){
        // insert data ke table belajar_laravel
        DB::table('belajar_laravel')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }
    public function edit($id){
        // Mengambil data dari tabel `belajar_laravel`
        $pegawai = DB::table('belajar_laravel')->where('pegawai_id', $id)->get();
        return view('edit', ['pegawai' => $pegawai]);
    }
    public function update(Request $request){
        // Update data pada tabel `belajar_laravel`
        DB::table('belajar_laravel')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat,
        ]);
        return redirect('/pegawai');
    }
    public function hapus($id){
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('belajar_laravel')->where('pegawai_id',$id)->delete();
	    // alihkan halaman ke halaman pegawai
	    return redirect('/pegawai');
    }
}
