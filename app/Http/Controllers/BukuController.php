<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // Menampilkan data buku
    public function index(Request $request)
    {
        $query = Buku::query();

        if ($request->has('cari')) {
            $query->where('merkbuku', 'like', '%' . $request->cari . '%');
        }

        $buku = $query->paginate(10);

        return view('buku.index', compact('buku'));
    }

    // Menampilkan form tambah buku
    public function create()
    {
        return view('buku.create');
    }

    // Menyimpan data buku baru
    public function store(Request $request)
    {
        $request->validate([
            'merkbuku' => 'required|max:30',
            'stockbuku' => 'required|integer',
            'tersedia' => 'required|in:Y,N',
        ], [
            'merkbuku.required' => 'Merk buku wajib diisi.',
            'merkbuku.max' => 'Merk buku maksimal 30 karakter.',
            'stockbuku.required' => 'Stok buku wajib diisi.',
            'stockbuku.integer' => 'Stok buku harus berupa angka.',
            'tersedia.required' => 'Status tersedia wajib dipilih.',
            'tersedia.in' => 'Status tersedia hanya boleh Y atau N.',
        ]);

        Buku::create([
            'merkbuku' => $request->merkbuku,
            'stockbuku' => $request->stockbuku,
            'tersedia' => $request->tersedia,
        ]);

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil ditambahkan.');
    }

    // Menampilkan form edit buku
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    // Memperbarui data buku
    public function update(Request $request, $id)
    {
        $request->validate([
            'merkbuku' => 'required|max:30',
            'stockbuku' => 'required|integer',
            'tersedia' => 'required|in:Y,N',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update([
            'merkbuku' => $request->merkbuku,
            'stockbuku' => $request->stockbuku,
            'tersedia' => $request->tersedia,
        ]);

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil diperbarui.');
    }

    // Menghapus data buku
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil dihapus.');
    }
}
