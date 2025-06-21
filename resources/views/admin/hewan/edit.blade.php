@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Edit Hewan: {{ $hewan->nama }}</h1>
        <a href="{{ route('admin.hewan.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.hewan.update', $hewan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Hewan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $hewan->nama) }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="ras_id" class="form-label">Ras Hewan <span class="text-danger">*</span></label>
                            <select class="form-select @error('ras_id') is-invalid @enderror" id="ras_id" name="ras_id" required>
                                <option value="" selected disabled>-- Pilih Ras --</option>
                                @foreach($rass as $ras)
                                    <option value="{{ $ras->id }}" {{ old('ras_id', $hewan->ras_id) == $ras->id ? 'selected' : '' }}>
                                        {{ $ras->nama_ras }} ({{ $ras->jenisHewan->nama_jenis ?? 'Tidak ada jenis' }})
                                    </option>
                                @endforeach
                            </select>
                            @error('ras_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="biografi" class="form-label">Biografi/Deskripsi Hewan</label>
                    <textarea class="form-control @error('biografi') is-invalid @enderror" id="biografi" name="biografi" rows="4">{{ old('biografi', $hewan->biografi) }}</textarea>
                    @error('biografi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="umur_min_perawatan" class="form-label">Umur Minimal Perawatan (bulan)</label>
                            <input type="number" class="form-control @error('umur_min_perawatan') is-invalid @enderror" id="umur_min_perawatan" name="umur_min_perawatan" value="{{ old('umur_min_perawatan', $hewan->umur_min_perawatan) }}" min="0">
                            @error('umur_min_perawatan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="umur_max_perawatan" class="form-label">Umur Maksimal Perawatan (bulan)</label>
                            <input type="number" class="form-control @error('umur_max_perawatan') is-invalid @enderror" id="umur_max_perawatan" name="umur_max_perawatan" value="{{ old('umur_max_perawatan', $hewan->umur_max_perawatan) }}" min="0">
                            @error('umur_max_perawatan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="gambar_utama" class="form-label">Gambar Utama</label>
                    @if($hewan->getRawOriginal('gambar_utama'))
                        <div class="mb-2">
                            <img src="{{ $hewan->gambar_utama }}" alt="{{ $hewan->nama }}" class="img-thumbnail mb-2" style="max-height: 200px;">
                            <div><small class="text-muted">Gambar saat ini</small></div>
                        </div>
                    @endif
                    <input type="file" class="form-control @error('gambar_utama') is-invalid @enderror" id="gambar_utama" name="gambar_utama" accept="image/*">
                    <small class="text-muted">Format: JPG, PNG, GIF. Ukuran maks: 2MB. Biarkan kosong jika tidak ingin mengubah gambar.</small>
                    @error('gambar_utama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Perbarui
                    </button>
                    <a href="{{ route('admin.hewan.index') }}" class="btn btn-outline-secondary ms-2">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection