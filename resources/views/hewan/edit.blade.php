@extends('layouts.app')

@section('title', 'Edit Data Hewan')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-edit me-1"></i> Edit Data Hewan
                    </h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('hewan.update', $hewan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="ras_id" class="form-label">Ras Hewan <span class="text-danger">*</span></label>
                            <select class="form-select @error('ras_id') is-invalid @enderror" name="ras_id" id="ras_id" required>
                                @foreach($ras as $r)
                                <option value="{{ $r->id }}" {{ $hewan->ras_id == $r->id ? 'selected' : '' }}>
                                    {{ $r->nama }} ({{ $r->jenisHewan->nama }})
                                </option>
                                @endforeach
                            </select>
                            @error('ras_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Hewan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                                   name="nama" id="nama" value="{{ old('nama', $hewan->nama) }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="umur_min_perawatan" class="form-label">Umur Minimal Perawatan (tahun) <span class="text-danger">*</span></label>
                                <input type="number" step="0.1" min="0" 
                                       class="form-control @error('umur_min_perawatan') is-invalid @enderror" 
                                       name="umur_min_perawatan" id="umur_min_perawatan" 
                                       value="{{ old('umur_min_perawatan', $hewan->umur_min_perawatan) }}" required>
                                @error('umur_min_perawatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="umur_max_perawatan" class="form-label">Umur Maksimal Perawatan (tahun) <span class="text-danger">*</span></label>
                                <input type="number" step="0.1" min="0" 
                                       class="form-control @error('umur_max_perawatan') is-invalid @enderror" 
                                       name="umur_max_perawatan" id="umur_max_perawatan" 
                                       value="{{ old('umur_max_perawatan', $hewan->umur_max_perawatan) }}" required>
                                @error('umur_max_perawatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="biografi" class="form-label">Biografi</label>
                            <textarea class="form-control @error('biografi') is-invalid @enderror" 
                                      name="biografi" id="biografi" rows="4">{{ old('biografi', $hewan->biografi) }}</textarea>
                            @error('biografi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="gambar_utama" class="form-label">Gambar Utama</label>
                            <input type="file" class="form-control @error('gambar_utama') is-invalid @enderror" 
                                   name="gambar_utama" id="gambar_utama" accept="image/*">
                            @error('gambar_utama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar</small>
                            
                            @if($hewan->gambar_utama)
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$hewan->gambar_utama) }}" 
                                     class="img-thumbnail" 
                                     style="max-height: 150px;" 
                                     alt="Gambar saat ini">
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" 
                                           id="hapus_gambar" name="hapus_gambar">
                                    <label class="form-check-label" for="hapus_gambar">
                                        Hapus gambar saat ini
                                    </label>
                                </div>
                            </div>
                            @endif
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('hewan.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-1"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i> Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection