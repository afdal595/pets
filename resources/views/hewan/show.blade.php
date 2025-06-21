@extends('layouts.app')

@section('title', 'Detail Hewan: ' . $hewan->nama)

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('hewan.index') }}">Daftar Hewan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body text-center">
                    <img src="{{ $hewan->gambar_utama ? asset('storage/'.$hewan->gambar_utama) : asset('images/default-pet.png') }}" 
                         class="img-fluid rounded mb-3" 
                         style="max-height: 300px; width: auto;" 
                         alt="{{ $hewan->nama }}">
                    
                    <h4>{{ $hewan->nama }}</h4>
                    <p class="text-muted">{{ $hewan->ras->nama }} ({{ $hewan->ras->jenisHewan->nama }})</p>
                    
                    <div class="d-flex justify-content-center gap-2 mb-3">
                        <a href="{{ route('hewan.edit', $hewan->id) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('hewan.destroy', $hewan->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Informasi Hewan</h5>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h6>Umur Perawatan</h6>
                        <p>{{ $hewan->umur_min_perawatan }} - {{ $hewan->umur_max_perawatan }} tahun</p>
                    </div>
                    
                    <div class="mb-4">
                        <h6>Biografi</h6>
                        <p>{{ $hewan->biografi ?? '-' }}</p>
                    </div>
                    
                    <div>
                        <h6>Galeri</h6>
                        @include('hewan._galeri')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection