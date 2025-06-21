@extends('layouts.app')

@section('title', 'Tambah Jenis Hewan Baru')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tambah Jenis Hewan Baru</h5>
                        <a href="{{ route('jenis-hewan.index') }}" class="btn btn-sm btn-light">
                            <i class="fas fa-arrow-left me-1"></i> Kembali
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('jenis-hewan.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Jenis Hewan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                                   id="nama" name="nama" value="{{ old('nama') }}" 
                                   placeholder="Contoh: Anjing, Kucing, Burung" required autofocus>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Masukkan nama jenis hewan (minimal 3 karakter)</small>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                                      id="deskripsi" name="deskripsi" rows="4"
                                      placeholder="Deskripsi singkat tentang jenis hewan ini">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar Ilustrasi</label>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" 
                                   id="gambar" name="gambar" accept="image/*">
                            @error('gambar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Format: JPG, PNG (maks. 2MB)</small>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i> Simpan Data
                            </button>
                            <button type="reset" class="btn btn-outline-secondary">
                                <i class="fas fa-undo me-1"></i> Reset Form
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    /* Custom styling untuk halaman create */
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .card-header {
        border-radius: 10px 10px 0 0 !important;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Validasi client-side tambahan
        const form = document.querySelector('form');
        const namaInput = document.getElementById('nama');
        
        form.addEventListener('submit', function(e) {
            if (namaInput.value.trim().length < 3) {
                e.preventDefault();
                alert('Nama jenis hewan minimal 3 karakter');
                namaInput.focus();
            }
        });

        // Preview gambar sebelum upload
        const gambarInput = document.getElementById('gambar');
        if (gambarInput) {
            gambarInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    if (file.size > 2 * 1024 * 1024) {
                        alert('Ukuran file terlalu besar (maks. 2MB)');
                        gambarInput.value = '';
                        return;
                    }
                    
                    if (!file.type.match('image.*')) {
                        alert('Hanya file gambar yang diperbolehkan');
                        gambarInput.value = '';
                        return;
                    }
                    
                    // Tambahkan preview gambar jika diperlukan
                    // ...
                }
            });
        }
    });
</script>
@endpush