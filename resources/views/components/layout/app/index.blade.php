<h1>Daftar Buku</h1>

<p>
    <a href="{{ route('bukus.create') }}">Tambah Buku</a>
</p>

@session('success')
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endsession

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
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
