<h1>Tambah Buku</h1>

<form action="{{ route('bukus.store') }}" method="POST">
    @csrf
    <p>
        <label>Kode Buku:</label>
        <input type="text" name="kode_buku">
    </p>
    <p>
        <label>Judul:</label>
        <input type="text" name="judul">
    </p>
    <p>
        <label>Kategori:</label>
        <input type="text" name="kategori">
    </p>
    <p>
        <label>Penulis:</label>
        <input type="text" name="penulis">
    </p>
    <p>
        <label>Tahun Terbit:</label>
        <input type="number" name="tahun_terbit">
    </p>
    <p>
        <label>Jumlah:</label>
        <input type="number" name="jumlah">
    </p>
    <p>
        <label>Keterangan:</label>
        <textarea name="keterangan" rows="3"></textarea>
    </p>
    <button type="submit">Simpan</button>
</form>

<p>
    <a href="{{ route('bukus.index') }}">Kembali ke Daftar Buku</a>
</p>
