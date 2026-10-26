<h1>Edit Buku</h1>

<form action="{{ route('bukus.update', $buku->id) }}" method="POST">
    @csrf
    @method('PUT')
    <p>
        <label>Kode Buku:</label>
        <input type="text" name="kode_buku" value="{{ $buku->kode_buku }}">
    </p>
    <p>
        <label>Judul:</label>
        <input type="text" name="judul" value="{{ $buku->judul }}">
    </p>
    <p>
        <label>Kategori:</label>
        <input type="text" name="kategori" value="{{ $buku->kategori }}">
    </p>
    <p>
        <label>Penulis:</label>
        <input type="text" name="penulis" value="{{ $buku->penulis }}">
    </p>
    <p>
        <label>Tahun Terbit:</label>
        <input type="number" name="tahun_terbit" value="{{ $buku->tahun_terbit }}">
    </p>
    <p>
        <label>Jumlah:</label>
        <input type="number" name="jumlah" value="{{ $buku->jumlah }}">
    </p>
    <p>
        <label>Keterangan:</label>
        <textarea name="keterangan" rows="3">{{ $buku->keterangan }}</textarea>
    </p>
    <button type="submit">Simpan</button>
</form>

<p>
    <a href="{{ route('bukus.index') }}">Kembali ke Buku</a>
</p>
