<div class="mb-3">
    <label for="jenis_hewan_id" class="form-label">Jenis Hewan <span class="text-danger">*</span></label>
    <select class="form-select @error('jenis_hewan_id') is-invalid @enderror" 
            id="jenis_hewan_id" name="jenis_hewan_id" required>
        <option value="">Pilih Jenis Hewan</option>
        @foreach($jenisHewan as $jenis)
        <option value="{{ $jenis->id }}" 
            {{ old('jenis_hewan_id', $ras->jenis_hewan_id ?? '') == $jenis->id ? 'selected' : '' }}>
            {{ $jenis->nama }}
        </option>
        @endforeach
    </select>
    @error('jenis_hewan_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="nama" class="form-label">Nama Ras <span class="text-danger">*</span></label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
           id="nama" name="nama" value="{{ old('nama', $ras->nama ?? '') }}" 
           placeholder="Contoh: Bulldog, Persian, etc." required>
    @error('nama')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="deskripsi" class="form-label">Deskripsi</label>
    <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
              id="deskripsi" name="deskripsi" rows="3"
              placeholder="Deskripsi singkat tentang ras ini">{{ old('deskripsi', $ras->deskripsi ?? '') }}</textarea>
    @error('deskripsi')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="karakteristik" class="form-label">Karakteristik</label>
    <textarea class="form-control @error('karakteristik') is-invalid @enderror" 
              id="karakteristik" name="karakteristik" rows="3"
              placeholder="Karakteristik khusus ras ini">{{ old('karakteristik', $ras->karakteristik ?? '') }}</textarea>
    @error('karakteristik')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="gambar_thumbnail" class="form-label">Gambar Thumbnail</label>
    <input type="file" class="form-control @error('gambar_thumbnail') is-invalid @enderror" 
           id="gambar_thumbnail" name="gambar_thumbnail">
    @error('gambar_thumbnail')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <small class="text-muted">Format: JPG, PNG (maks. 2MB)</small>
    
    @if(isset($ras) && $ras->gambar_thumbnail)
    <div class="mt-3">
        <img src="{{ asset('storage/' . $ras->gambar_thumbnail) }}" 
             alt="Thumbnail saat ini" 
             class="img-thumbnail" 
             style="max-height: 150px;">
        <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" 
                   id="hapus_gambar" name="hapus_gambar">
            <label class="form-check-label" for="hapus_gambar">
                Hapus gambar saat ini
            </label>
        </div>
    </div>
    @else
    <div class="mt-3">
        <img src="" alt="Preview Gambar" 
             id="gambar-preview" 
             class="img-thumbnail d-none" 
             style="max-height: 150px;">
    </div>
    @endif
</div>

<div id="ras-detail" class="breed-detail-container hidden">
    <div id="ras-biografi" class="tab-content active">
        <h2>Biografi Ras</h2>
        <p>Tambahkan deskripsi lengkap tentang ras ini di sini.</p>
    </div>
    <div id="ras-perawatan" class="tab-content">
        <h2>Perawatan</h2>
        <p>Tambahkan informasi perawatan untuk ras ini di sini.</p>
    </div>
    <div id="ras-makanan" class="tab-content">
        <h2>Makanan</h2>
        <p>Tambahkan rekomendasi makanan untuk ras ini di sini.</p>
    </div>
    <div id="ras-peralatan" class="tab-content">
        <h2>Peralatan</h2>
        <p>Tambahkan daftar peralatan yang diperlukan untuk ras ini di sini.</p>
    </div>
    <div id="ras-galeri" class="tab-content">
        <h2>Galeri</h2>
        <p>Tambahkan gambar-gambar ras ini di sini.</p>
    </div>
</div>