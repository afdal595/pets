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
                @if($ras->gambar_thumbnail)
                <img src="{{ asset('storage/' . $ras->gambar_thumbnail) }}" class="card-img-top" alt="{{ $ras->nama }}">
                @else
                <div class="text-center py-5 bg-light">
                    <i class="fas fa-image fa-5x text-muted"></i>
                    <p class="mt-2">Tidak ada gambar</p>
                </div>
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $ras->nama }}</h5>
                    <p class="card-text"><strong>Jenis:</strong> {{ $ras->jenisHewan->nama }}</p>
                    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('ras.edit', $ras->id) }}" class="btn btn-warning">
                            <i class="fas fa-edit me-1"></i> Edit
                        </a>
                        <form action="{{ route('ras.destroy', $ras->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
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
                            <a href="{{ route('hewan.show', $hewan->id) }}" class="list-group-item list-group-item-action">
                                {{ $hewan->nama }}
                            </a>
                            @endforeach
                        </div>
                    @else
                        <p class="text-muted">Belum ada data hewan untuk ras ini</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection