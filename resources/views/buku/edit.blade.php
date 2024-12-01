@extends('template')
@section('tulisan1', 'Edit Buku')

@section('konten')
<div class="container mt-5">
    <form action="{{ route('buku.update', $buku->kodebuku) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="merkbuku" class="form-label">Merk Buku</label>
            <input type="text" class="form-control" name="merkbuku" value="{{ $buku->merkbuku }}" required>
        </div>
        <div class="mb-3">
            <label for="stockbuku" class="form-label">Stok Buku</label>
            <input type="number" class="form-control" name="stockbuku" value="{{ $buku->stockbuku }}" required>
        </div>
        <div class="mb-3">
            <label for="tersedia" class="form-label">Tersedia</label>
            <select class="form-control" name="tersedia" required>
                <option value="Y" {{ $buku->tersedia === 'Y' ? 'selected' : '' }}>Ada</option>
                <option value="N" {{ $buku->tersedia === 'N' ? 'selected' : '' }}>Habis</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
