@extends('layouts.app')

@section('title', 'Hasil Pencarian Hewan')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>
            <i class="fas fa-search me-2"></i> Hasil Pencarian
            @if(request('q')): "{{ request('q') }}" @endif
        </h1>
        <a href="{{ route('hewan.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-1"></i> Kembali
        </a>
    </div>

    @if($hewan->isEmpty())
        <div class="alert alert-info">
            <i class="fas fa-info-circle me-2"></i> Tidak ditemukan hasil pencarian
        </div>
    @else
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($hewan as $h)
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $h->gambar_utama ? asset('storage/'.$h->gambar_utama) : asset('images/default-pet.png') }}" 
                         class="card-img-top" 
                         style="height: 200px; object-fit: cover;" 
                         alt="{{ $h->nama }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $h->nama }}</h5>
                        <p class="card-text">
                            <span class="badge bg-primary">{{ $h->ras->nama }}</span>
                            <span class="badge bg-secondary ms-1">{{ $h->ras->jenisHewan->nama }}</span>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">
                                Umur perawatan: {{ $h->umur_min_perawatan }} - {{ $h->umur_max_perawatan }} tahun
                            </small>
                        </p>
                    </div>
                    <div class="card-footer bg-white">
                        <a href="{{ route('hewan.show', $h->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-eye me-1"></i> Detail
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="mt-4">
            {{ $hewan->appends(request()->query())->links() }}
        </div>
    @endif
</div>
@endsection