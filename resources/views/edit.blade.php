@extends('template')
@section('tulisan1', 'Edit Pegawai')

@section('konten')
<div class="container mt-0">
    <form action="/pegawai/update" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $pegawai->pegawai_id }}">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $pegawai->pegawai_nama }}" required>
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" value="{{ $pegawai->pegawai_jabatan }}" required>
        </div>
        <div class="mb-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="number" class="form-control" name="umur" value="{{ $pegawai->pegawai_umur }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" rows="3" required>{{ $pegawai->pegawai_alamat }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="/pegawai" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
