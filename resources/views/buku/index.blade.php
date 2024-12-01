@extends('template')
@section('title', 'Buku')
@section('tulisan1', 'Data Buku')

@section('link1')
    <a href="{{ route('buku.create') }}" class="btn btn-primary mt-3"> + Tambah Buku Baru</a>
@endsection

@section('konten')
    <br/>

    <form action="{{ route('buku.index') }}" method="GET">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Cari Merk Buku :</label>
            <div class="col-sm-6">
              <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari Buku .." value="{{ old('cari') }}">
            </div>
            <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success">
            </div>
        </div>
    </form>

    <br/>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Buku</th>
            <th>Merk Buku</th>
            <th>Stok</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach($buku as $b)
        <tr>
            <td>{{ $b->kodebuku }}</td> <!-- Menampilkan kode buku -->
            <td>{{ $b->merkbuku }}</td>
            <td>{{ $b->stockbuku }}</td>
            <td>
                @if($b->tersedia === 'Y')
                    <span class="badge bg-success">Ada</span>
                @else
                    <span class="badge bg-danger">Habis</span>
                @endif
            </td>
            <td>
                <a class="btn btn-warning btn-sm" href="{{ route('buku.edit', $b->kodebuku) }}">Edit</a>
                <form action="{{ route('buku.destroy', $b->kodebuku) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <br/>

    Halaman : {{ $buku->currentPage() }} <br/>
    Jumlah Data : {{ $buku->total() }} <br/>
    Data Per Halaman : {{ $buku->perPage() }} <br/>

    {{ $buku->links() }}
@endsection
