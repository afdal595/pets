<!-- Nama Ras -->
<div class="mb-3">
    <label for="nama" class="form-label">Nama Ras</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
           id="nama" name="nama" value="{{ old('nama', $ras->nama ?? '') }}" required>
    @error('nama')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Jenis Hewan -->
<div class="mb-3">
    <label for="jenis_hewan_id" class="form-label">Jenis Hewan</label>
    <select class="form-select @error('jenis_hewan_id') is-invalid @enderror" 
            id="jenis_hewan_id" name="jenis_hewan_id" required>
        <option value="">Pilih Jenis Hewan</option>
        @foreach($jenisHewan as $jenis)
            <option value="{{ $jenis->id }}" 
                {{ (old('jenis_hewan_id', $ras->jenis_hewan_id ?? '') == $jenis->id) ? 'selected' : '' }}>
                {{ $jenis->nama }}
            </option>
        @endforeach
    </select>
    @error('jenis_hewan_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Deskripsi -->
<div class="mb-3">
    <label for="deskripsi" class="form-label">Deskripsi</label>
    <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
              id="deskripsi" name="deskripsi" rows="4" required>{{ old('deskripsi', $ras->deskripsi ?? '') }}</textarea>
    @error('deskripsi')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Gambar -->
<div class="mb-3">
    <label for="gambar" class="form-label">Gambar</label>
    <input type="file" class="form-control @error('gambar') is-invalid @enderror" 
           id="gambar" name="gambar" accept="image/*" {{ isset($ras) ? '' : 'required' }}>
    @error('gambar')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    @if(isset($ras) && $ras->gambar)
        <div class="mt-2">
            <img src="{{ asset($ras->gambar) }}" alt="{{ $ras->nama }}" class="img-thumbnail" style="max-height: 200px;">
        </div>
    @endif
</div>

<!-- Gambar Thumbnail -->
<div class="mb-3">
    <label for="gambar_thumbnail" class="form-label">Gambar Thumbnail</label>
    <input type="file" class="form-control @error('gambar_thumbnail') is-invalid @enderror" 
           id="gambar_thumbnail" name="gambar_thumbnail" accept="image/*" {{ isset($ras) ? '' : 'required' }}>
    @error('gambar_thumbnail')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    @if(isset($ras) && $ras->gambar_thumbnail)
        <div class="mt-2">
            <img src="{{ asset($ras->gambar_thumbnail) }}" alt="{{ $ras->nama }}" class="img-thumbnail" style="max-height: 100px;">
        </div>
    @endif
</div>

<!-- Karakteristik -->
<div class="mb-3">
    <label for="karakteristik" class="form-label">Karakteristik</label>
    <textarea class="form-control @error('karakteristik') is-invalid @enderror" 
              id="karakteristik" name="karakteristik" rows="3">{{ old('karakteristik', $ras->karakteristik ?? '') }}</textarea>
    @error('karakteristik')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Perawatan -->
<div class="mb-3">
    <label for="perawatan" class="form-label">Perawatan</label>
    <textarea class="form-control @error('perawatan') is-invalid @enderror" 
              id="perawatan" name="perawatan" rows="3">{{ old('perawatan', $ras->perawatan ?? '') }}</textarea>
    @error('perawatan')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
