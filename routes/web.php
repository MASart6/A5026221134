<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PageCounterController;
use App\Http\Controllers\JadwalUjianController;
use App\Models\JadwalUjian;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('dosen', [DosenController::class, 'index']);

//Route Crud
Route::get('/pegawai', [PegawaiController::class, 'index']);
// // Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);

Route::resource('buku', BukuController::class);
Route::get('/buku/edit/{id}', [BukuController::class, 'edit']);
Route::put('/buku/update/{id}', [BukuController::class, 'update']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/pagecounter', [PageCounterController::class, 'index']);

// Start: Add assignments for sessions 1 to 7
Route::get('/helloHtml', function(){
    return view('helloHtml.home');
});
Route::get('/styleCss', function(){
    return view('styleCss.home');
});
Route::get('/responsive', function(){
    return view('responsive.home');
});
Route::get('/form', function(){
    return view('form.home');
});
Route::get('/linktree', function(){
    return view('linktree.home');
});
Route::get('/ourTestimoni', function(){
    return view('ourTestimoni.home');
});
//End:  Add assignments for sessions 1 to 7

Route::resource('jadwalujian', JadwalUjianController::class);
