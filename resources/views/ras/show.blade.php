@extends('layouts.app')

@section('title', 'Detail Ras: ' . $ras->nama)

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('ras.index') }}">Ras Hewan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-img-top text-center bg-light p-4">
                    @if($ras->gambar_thumbnail)
                    <img src="{{ asset('storage/' . $ras->gambar_thumbnail) }}" 
                         alt="{{ $ras->nama }}" 
                         class="img-fluid rounded" 
                         style="max-height: 250px; object-fit: cover;">
                    @else
                    <i class="fas fa-image fa-5x text-muted mb-3"></i>
                    <p class="text-muted">Tidak ada gambar</p>
                    @endif
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $ras->nama }}</h5>
                    <p class="card-text">
                        <strong>Jenis:</strong> {{ $ras->jenisHewan->nama }}
                    </p>
                    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('ras.edit', $ras->id) }}" class="btn btn-warning">
                            <i class="fas fa-edit me-1"></i> Edit
                        </a>
                        <form action="{{ route('ras.destroy', $ras->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" 
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus ras ini?')">
                                <i class="fas fa-trash-alt me-1"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Informasi Lengkap</h5>
                </div>
                <div class="card-body">
                    <h6>Deskripsi:</h6>
                    <p>{{ $ras->deskripsi ?? '-' }}</p>
                    
                    <h6 class="mt-4">Karakteristik:</h6>
                    <p>{{ $ras->karakteristik ?? '-' }}</p>
                    
                    <h6 class="mt-4">Daftar Hewan:</h6>
                    @if($ras->hewan->count() > 0)
                        <div class="list-group">
                            @foreach($ras->hewan as $hewan)
                            <a href="{{ route('hewan.show', $hewan->id) }}" 
                               class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                {{ $hewan->nama }}
                                <span class="badge bg-primary rounded-pill">
                                    {{ $hewan->umur_min_perawatan }} - {{ $hewan->umur_max_perawatan }} tahun
                                </span>
                            </a>
                            @endforeach
                        </div>
                    @else
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i> Belum ada data hewan untuk ras ini
                        </div>
                    @endif
                </div>
            </div>

            <!-- Tab Structure for Additional Information -->
            <div class="card mt-4">
                <div class="card-header bg-secondary text-white">
                    <ul class="nav nav-tabs card-header-tabs" id="rasDetailTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="biografi-tab" data-bs-toggle="tab" 
                               href="#ras-biografi" role="tab" aria-controls="ras-biografi" 
                               aria-selected="true">Biografi</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="perawatan-tab" data-bs-toggle="tab" 
                               href="#ras-perawatan" role="tab" aria-controls="ras-perawatan" 
                               aria-selected="false">Perawatan</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="makanan-tab" data-bs-toggle="tab" 
                               href="#ras-makanan" role="tab" aria-controls="ras-makanan" 
                               aria-selected="false">Makanan</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="peralatan-tab" data-bs-toggle="tab" 
                               href="#ras-peralatan" role="tab" aria-controls="ras-peralatan" 
                               aria-selected="false">Peralatan</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="galeri-tab" data-bs-toggle="tab" 
                               href="#ras-galeri" role="tab" aria-controls="ras-galeri" 
                               aria-selected="false">Galeri</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="rasDetailTabContent">
                        <div class="tab-pane fade show active" id="ras-biografi" role="tabpanel" 
                             aria-labelledby="biografi-tab">
                            <h5>Biografi Ras</h5>
                            <p>Tambahkan deskripsi lengkap tentang ras ini di sini.</p>
                        </div>
                        <div class="tab-pane fade" id="ras-perawatan" role="tabpanel" 
                             aria-labelledby="perawatan-tab">
                            <h5>Perawatan</h5>
                            <p>Tambahkan informasi perawatan untuk ras ini di sini.</p>
                        </div>
                        <div class="tab-pane fade" id="ras-makanan" role="tabpanel" 
                             aria-labelledby="makanan-tab">
                            <h5>Makanan</h5>
                            <p>Tambahkan rekomendasi makanan untuk ras ini di sini.</p>
                        </div>
                        <div class="tab-pane fade" id="ras-peralatan" role="tabpanel" 
                             aria-labelledby="peralatan-tab">
                            <h5>Peralatan</h5>
                            <p>Tambahkan daftar peralatan yang diperlukan untuk ras ini di sini.</p>
                        </div>
                        <div class="tab-pane fade" id="ras-galeri" role="tabpanel" 
                             aria-labelledby="galeri-tab">
                            <h5>Galeri</h5>
                            <p>Tambahkan gambar-gambar ras ini di sini.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection