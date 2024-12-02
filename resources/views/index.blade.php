@extends('template')
@section('title', 'Pegawai')
@section('tulisan1', 'Data Pegawai')

@section('link1')
	<a href="/pegawai/tambah" class="btn btn-primary mt-3"> + Tambah Pegawai Baru</a>
@endsection

@section('konten')
	<br/>

	<form action="/pegawai/cari" method="GET">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Cari Nama Pegawai :</label>
            <div class="col-sm-6">
              <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
        	</div>
            <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success">
              </div>
		</div>
	</form>

	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a class="btn btn-primary btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}"><i class='fas fa-edit'></i></a>
				<a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		@endforeach
	</table>

    <br/>

	Halaman : {{ $pegawai->currentPage() }} <br/>
	Jumlah Data : {{ $pegawai->total() }} <br/>
	Data Per Halaman : {{ $pegawai->perPage() }} <br/>

	{{ $pegawai->links() }}


@endsection
