@extends('components.layout.app.app')
@section('content')
<div class="container mt -4">
<h1>Daftar Buku</h1>

<p>
    <a href="{{ route('bukus.create') }}">Tambah Buku</a>
</p>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <table class="table table-bordered table-striped">
            <tr>
    <thead>
            <th>No</th>
            <th>Kode</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bukus as $buku)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $buku->kode_buku }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->kategori }}</td>
            <td>{{ $buku->penulis }}</td>
            <td>{{ $buku->tahun_terbit }}</td>
            <td>{{ $buku->jumlah }}</td>
            <td>
                <a href="{{ route('bukus.edit', $buku->id) }}">Edit</a>
                <form action="{{ route('bukus.destroy', $buku->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('yakin nih mau ngehapus bukunya?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
