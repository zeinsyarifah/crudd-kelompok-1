<div class="row g-3">
    <div class="col-md-6">
        <label for="kode_buku" class="form-label fw-semibold">Kode Buku <span class="text-danger">*</span></label>
        <input type="text" name="kode_buku" id="kode_buku" 
               class="form-control @error('kode_buku') is-invalid @enderror" 
               value="{{ old('kode_buku', $buku->kode_buku ?? '') }}" 
               placeholder="Contoh: BK-1234" required>
        @error('kode_buku')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="judul" class="form-label fw-semibold">Judul Buku <span class="text-danger">*</span></label>
        <input type="text" name="judul" id="judul" 
               class="form-control @error('judul') is-invalid @enderror" 
               value="{{ old('judul', $buku->judul ?? '') }}" 
               placeholder="Masukkan judul buku" required>
        @error('judul')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="kategori" class="form-label fw-semibold">Kategori <span class="text-danger">*</span></label>
        <select name="kategori" id="kategori" class="form-select @error('kategori') is-invalid @enderror" required>
            <option value="" disabled {{ old('kategori', $buku->kategori ?? '') == '' ? 'selected' : '' }}>-- Pilih Kategori --</option>
            @foreach(['Pelajaran', 'Novel', 'Sains', 'Sejarah', 'Teknologi'] as $kat)
                <option value="{{ $kat }}" {{ old('kategori', $buku->kategori ?? '') == $kat ? 'selected' : '' }}>
                    {{ $kat }}
                </option>
            @endforeach
        </select>
        @error('kategori')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="penulis" class="form-label fw-semibold">Penulis <span class="text-danger">*</span></label>
        <input type="text" name="penulis" id="penulis" 
               class="form-control @error('penulis') is-invalid @enderror" 
               value="{{ old('penulis', $buku->penulis ?? '') }}" 
               placeholder="Nama penulis" required>
        @error('penulis')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-2">
        <label for="tahun_terbit" class="form-label fw-semibold">Tahun Terbit <span class="text-danger">*</span></label>
        <input type="number" name="tahun_terbit" id="tahun_terbit" 
               class="form-control @error('tahun_terbit') is-invalid @enderror" 
               value="{{ old('tahun_terbit', $buku->tahun_terbit ?? '') }}" 
               min="1900" max="{{ date('Y') + 1 }}" placeholder="2024" required>
        @error('tahun_terbit')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-2">
        <label for="jumlah" class="form-label fw-semibold">Jumlah Stok <span class="text-danger">*</span></label>
        <input type="number" name="jumlah" id="jumlah" 
               class="form-control @error('jumlah') is-invalid @enderror" 
               value="{{ old('jumlah', $buku->jumlah ?? 1) }}" 
               min="0" placeholder="1" required>
        @error('jumlah')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12">
        <label for="keterangan" class="form-label fw-semibold">Keterangan / Sinopsis</label>
        <textarea name="keterangan" id="keterangan" rows="4" 
                  class="form-control @error('keterangan') is-invalid @enderror" 
                  placeholder="Tambahkan keterangan atau sinopsis buku...">{{ old('keterangan', $buku->keterangan ?? '') }}</textarea>
        @error('keterangan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
