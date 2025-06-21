@extends('layouts.app')

@section('title', 'Edit Jenis Hewan: ' . $jenisHewan->nama)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Edit Jenis Hewan</h5>
                        <a href="{{ route('jenis-hewan.index') }}" class="btn btn-sm btn-light">
                            <i class="fas fa-arrow-left me-1"></i> Kembali
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('jenis-hewan.update', $jenisHewan->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Jenis Hewan</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                                   id="nama" name="nama" value="{{ old('nama', $jenisHewan->nama) }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                                      id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi', $jenisHewan->deskripsi) }}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid">
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

@push('scripts')
<script>
    // Anda bisa menambahkan script khusus untuk halaman ini di sini
    document.addEventListener('DOMContentLoaded', function() {
        // Contoh validasi tambahan
        const form = document.querySelector('form');
        form.addEventListener('submit', function(e) {
            const nama = document.getElementById('nama').value.trim();
            if (nama === '') {
                e.preventDefault();
                alert('Nama jenis hewan harus diisi');
            }
        });
    });
</script>
@endpush