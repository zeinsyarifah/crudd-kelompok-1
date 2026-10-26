<h1>Tambah Buku</h1>

<form action="{{ route('bukus.store') }}" method="POST">
    @csrf
    @include('bukus.form')
</form>

<p>
    <a href="{{ route('bukus.index') }}">Kembali ke Buku</a>
</p>
