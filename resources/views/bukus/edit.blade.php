@extends('components.layout.app.app')

@section('content')
<div class="card shadow-sm border-0 rounded-3">
    <div class="card-body p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold mb-0 text-dark">Edit Buku</h3>
            <a href="{{ route('bukus.index') }}" class="btn btn-secondary">
                Kembali ke Daftar Buku
            </a>
        </div>

        <form action="{{ route('bukus.update', $buku->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('bukus.form', ['buku' => $buku])

            <div class="d-flex gap-2 mt-4">
                <button type="submit" class="btn btn-warning text-white px-4 fw-semibold">Simpan Perubahan</button>
                <a href="{{ route('bukus.index') }}" class="btn btn-outline-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
