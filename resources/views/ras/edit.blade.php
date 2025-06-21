@extends('layouts.app')

@section('title', 'Edit Ras: ' . $ras->nama)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">
                            <i class="fas fa-edit me-1"></i> Edit Ras: {{ $ras->nama }}
                        </h5>
                        <a href="{{ route('ras.index') }}" class="btn btn-sm btn-light">
                            <i class="fas fa-arrow-left me-1"></i> Kembali
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ras.update', $ras->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('ras._form')

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i> Simpan Perubahan
                            </button>
                            <a href="{{ route('ras.index') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-times me-1"></i> Batal
                            </a>
                        </div>
                    </form>

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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Validasi client-side
        const form = document.querySelector('form');
        const namaInput = document.getElementById('nama');
        
        form.addEventListener('submit', function(e) {
            if (namaInput.value.trim().length < 3) {
                e.preventDefault();
                alert('Nama ras minimal 3 karakter');
                namaInput.focus();
            }
        });
    });
</script>
@endpush