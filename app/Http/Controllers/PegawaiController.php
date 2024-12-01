<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    public function index(){
    	// mengambil data dari table pegawai
    	// // $pegawai = DB::table('belajar_laravel')->get();
        $pegawai = DB::table('belajar_laravel')->paginate(10);
    	// mengirim data pegawai ke view index
    	return view('index',['pegawai' => $pegawai]);
    }
    public function cari(Request $request){
		// menangkap data pencarian
		$cari = $request->cari;
    	// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('belajar_laravel')
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate();
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
        // Mengambil data pegawai berdasarkan ID dengan query builder
        $pegawai = DB::table('belajar_laravel')->where('pegawai_id', $id)->first();
        // Mengirimkan data ke view edit
        return view('edit', compact('pegawai'));
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
