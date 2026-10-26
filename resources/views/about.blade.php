@extends('components.layout.app.app')

@section('content')
<div class="card shadow-sm border-0 rounded-3">
    <div class="card-body p-4">
        <h3 class="fw-bold mb-3 text-dark">About - Manajemen Buku Perpustakaan</h3>
        <p class="text-secondary">
            Aplikasi Manajemen Buku Perpustakaan ini dibangun menggunakan framework <strong>Laravel 11</strong> dengan implementasi operasi <strong>CRUD (Create, Read, Update, Delete)</strong> lengkap sesuai kriteria tugas LKPD 09 XI PROJECT CRUD.
        </p>
        <hr>
        <h5 class="fw-semibold">Fitur Utama:</h5>
        <ul>
            <li><strong>Create:</strong> Menambahkan data buku baru beserta validasi input lengkap.</li>
            <li><strong>Read:</strong> Menampilkan daftar seluruh buku dalam tabel terstruktur.</li>
            <li><strong>Update:</strong> Memperbarui informasi buku yang sudah tersimpan.</li>
            <li><strong>Delete:</strong> Menghapus data buku dengan dialog konfirmasi keamanan.</li>
        </ul>
        <a href="{{ route('bukus.index') }}" class="btn btn-secondary mt-3">Kembali ke Manajemen Buku</a>
    </div>
</div>
@endsection
