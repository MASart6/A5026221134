<?php

namespace App\Http\Controllers;

use App\Models\PageCounter;

class PageCounterController extends Controller
{
    public function index()
    {
        // Ambil record pertama atau buat jika tidak ada
        $counter = PageCounter::firstOrCreate(['id' => 1], ['jumlah' => 0]);

        // Increment jumlah pengunjung
        $counter->increment('jumlah');

        // Kirim jumlah ke view
        return view('pagecounter', ['jumlah' => $counter->jumlah]);
    }
}
