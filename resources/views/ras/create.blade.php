@extends('layouts.app')

@section('title', 'Tambah Ras Hewan Baru')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">
                            <i class="fas fa-plus-circle me-1"></i> Tambah Ras Hewan Baru
                        </h5>
                        <a href="{{ route('ras.index') }}" class="btn btn-sm btn-light">
                            <i class="fas fa-arrow-left me-1"></i> Kembali
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ras.store') }}" enctype="multipart/form-data">
                        @csrf
                        @include('ras._form')

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i> Simpan Ras
                            </button>
                            <button type="reset" class="btn btn-outline-secondary">
                                <i class="fas fa-undo me-1"></i> Reset Form
                            </button>
                        </div>
                    </form>
                </div>
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
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Preview gambar sebelum upload
        const gambarInput = document.getElementById('gambar_thumbnail');
        const gambarPreview = document.getElementById('gambar-preview');
        
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
                    
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        gambarPreview.src = e.target.result;
                        gambarPreview.classList.remove('d-none');
                    }
                    reader.readAsDataURL(file);
                }
            });
        }
    });
</script>
@endpush