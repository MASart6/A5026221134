@extends('template')
@section('tulisan1', 'Tambah Buku Baru')

@section('konten')
<div class="container mt-5">
    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="merkbuku" class="form-label">Merk Buku</label>
            <input type="text" class="form-control" name="merkbuku" placeholder="Masukkan merk buku" required>
        </div>
        <div class="mb-3">
            <label for="stockbuku" class="form-label">Stok Buku</label>
            <input type="number" class="form-control" name="stockbuku" placeholder="Masukkan jumlah stok buku" required>
        </div>
        <div class="mb-3">
            <label for="tersedia" class="form-label">Tersedia</label>
            <select class="form-control" name="tersedia" required>
                <option value="Y">Ada</option>
                <option value="N">Habis</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
