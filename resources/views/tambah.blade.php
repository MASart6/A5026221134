@extends('template')
@section('tulisan1', 'Tambah Pegawai Baru')

@section('konten')
<div class="container mt-5">
    <form action="/pegawai/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama pegawai" required>
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" placeholder="Masukkan jabatan pegawai" required>
        </div>
        <div class="mb-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="number" class="form-control" name="umur" placeholder="Masukkan umur pegawai" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" placeholder="Masukkan alamat pegawai" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/pegawai" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
