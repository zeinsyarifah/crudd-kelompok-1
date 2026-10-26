@extends('components.layout.app.app')

@section('content')
<div class="card shadow-sm border-0 rounded-3">
    <div class="card-body p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="fw-bold mb-0 text-dark">Daftar Buku</h3>
            <a href="{{ route('bukus.create') }}" class="btn btn-success px-3 py-2 fw-semibold">
                Tambah Buku
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="py-2 px-3" style="width: 50px;">No</th>
                        <th class="py-2 px-3" style="width: 100px;">Kode</th>
                        <th class="py-2 px-3">Judul</th>
                        <th class="py-2 px-3" style="width: 120px;">Kategori</th>
                        <th class="py-2 px-3" style="width: 180px;">Penulis</th>
                        <th class="py-2 px-3" style="width: 80px;">Tahun</th>
                        <th class="py-2 px-3" style="width: 80px;">Jumlah</th>
                        <th class="py-2 px-3 text-center" style="width: 130px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bukus as $buku)
                    <tr>
                        <td class="px-3">{{ $loop->iteration }}</td>
                        <td class="px-3 fw-medium">{{ $buku->kode_buku }}</td>
                        <td class="px-3">{{ $buku->judul }}</td>
                        <td class="px-3">{{ $buku->kategori }}</td>
                        <td class="px-3">{{ $buku->penulis }}</td>
                        <td class="px-3">{{ $buku->tahun_terbit }}</td>
                        <td class="px-3">{{ $buku->jumlah }}</td>
                        <td class="px-3 text-center">
                            <div class="d-inline-flex gap-1 justify-content-center">
                                <a href="{{ route('bukus.edit', $buku->id) }}" class="btn btn-warning btn-sm px-2 py-1 fw-semibold">
                                    Edit
                                </a>
                                <form action="{{ route('bukus.destroy', $buku->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku \'{{ $buku->judul }}\'?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm px-2 py-1 fw-semibold">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center py-4 text-muted">Belum ada data buku tersimpan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
