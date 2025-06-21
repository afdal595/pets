@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card" style="background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="text-white mb-1">Selamat Datang di Dashboard Admin</h4>
                            <p class="text-white-50 mb-0">
                                <i class="fas fa-calendar-alt me-2"></i>
                                {{ now()->format('l, d F Y') }}
                            </p>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-circle p-4">
                            <i class="fas fa-user-shield fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistik Utama -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="card h-100" style="background: linear-gradient(135deg, #FF6B6B 0%, #FF2D2D 100%);">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-white-50 mb-2">Total Hewan</h6>
                            <h3 class="text-white mb-0">{{ $totalHewan ?? 0 }}</h3>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-circle p-3">
                            <i class="fas fa-paw text-white fa-2x"></i>
                        </div>
                    </div>
                    <div class="progress bg-white bg-opacity-25 mt-4" style="height: 4px;">
                        <div class="progress-bar bg-white" style="width: 75%"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 mb-3">
            <div class="card h-100" style="background: linear-gradient(135deg, #28C76F 0%, #108D4D 100%);">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-white-50 mb-2">Total Ras</h6>
                            <h3 class="text-white mb-0">{{ $totalRas ?? 0 }}</h3>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-circle p-3">
                            <i class="fas fa-tag text-white fa-2x"></i>
                        </div>
                    </div>
                    <div class="progress bg-white bg-opacity-25 mt-4" style="height: 4px;">
                        <div class="progress-bar bg-white" style="width: 60%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card h-100" style="background: linear-gradient(135deg, #FFB547 0%, #FF8A00 100%);">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-white-50 mb-2">Jenis Hewan</h6>
                            <h3 class="text-white mb-0">{{ $totalJenis ?? 0 }}</h3>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-circle p-3">
                            <i class="fas fa-list text-white fa-2x"></i>
                        </div>
                    </div>
                    <div class="progress bg-white bg-opacity-25 mt-4" style="height: 4px;">
                        <div class="progress-bar bg-white" style="width: 45%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card h-100" style="background: linear-gradient(135deg, #0396FF 0%, #0061FF 100%);">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-white-50 mb-2">Total Pencarian</h6>
                            <h3 class="text-white mb-0">{{ $totalPencarian ?? 0 }}</h3>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-circle p-3">
                            <i class="fas fa-search text-white fa-2x"></i>
                        </div>
                    </div>
                    <div class="progress bg-white bg-opacity-25 mt-4" style="height: 4px;">
                        <div class="progress-bar bg-white" style="width: 30%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Cepat -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-white">
                    <h5 class="mb-0 d-flex align-items-center">
                        <i class="fas fa-bolt text-warning me-2"></i>
                        Menu Cepat
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <a href="{{ route('admin.hewan.create') }}" class="card h-100 text-decoration-none">
                                <div class="card-body text-center p-4" style="background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);">
                                    <div class="bg-white bg-opacity-10 rounded-circle p-3 mx-auto mb-3" style="width: fit-content;">
                                        <i class="fas fa-plus fa-2x text-white"></i>
                                    </div>
                                    <h5 class="text-white mb-0">Tambah Hewan</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('admin.ras.create') }}" class="card h-100 text-decoration-none">
                                <div class="card-body text-center p-4" style="background: linear-gradient(135deg, #28C76F 0%, #108D4D 100%);">
                                    <div class="bg-white bg-opacity-10 rounded-circle p-3 mx-auto mb-3" style="width: fit-content;">
                                        <i class="fas fa-plus fa-2x text-white"></i>
                                    </div>
                                    <h5 class="text-white mb-0">Tambah Ras</h5>
                                </div>
                            </a>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('admin.jenis.create') }}" class="card h-100 text-decoration-none">
                                <div class="card-body text-center p-4" style="background: linear-gradient(135deg, #FFB547 0%, #FF8A00 100%);">
                                    <div class="bg-white bg-opacity-10 rounded-circle p-3 mx-auto mb-3" style="width: fit-content;">
                                        <i class="fas fa-plus fa-2x text-white"></i>
                                    </div>
                                    <h5 class="text-white mb-0">Tambah Jenis</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ras Terpopuler & Hewan Terbaru -->
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-gradient-primary text-white">
                    <h5 class="mb-0">Ras Terpopuler</h5>
                </div>
                <div class="card-body">
                    @forelse($popularRas as $ras)
                    <div class="d-flex align-items-center mb-3 p-2 rounded hover-bg-light">
                        <div class="me-3">
                            @if($ras->gambar_thumbnail)
                                <img src="{{ $ras->gambar_thumbnail }}" alt="{{ $ras->nama }}" class="rounded-circle shadow-sm" style="width: 50px; height: 50px; object-fit: cover;">
                            @else
                                <div class="rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center shadow-sm" style="width: 50px; height: 50px;">
                                    <i class="fas fa-paw text-primary"></i>
                                </div>
                            @endif
                        </div>
                        <div>
                            <h6 class="mb-0 text-primary">{{ $ras->nama }}</h6>
                            <small class="text-muted"><i class="fas fa-pets me-1"></i>{{ $ras->hewan_count }} hewan</small>
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-4">
                        <i class="fas fa-folder-open text-muted fa-3x mb-3"></i>
                        <p class="text-muted mb-0">Belum ada data ras hewan</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-gradient-success text-white">
                    <h5 class="mb-0">Hewan Terbaru</h5>
                </div>
                <div class="card-body">
                    @forelse($latestPets as $pet)
                    <div class="d-flex align-items-center mb-3 p-2 rounded hover-bg-light">
                        <div class="me-3">
                            @if($pet->foto)
                                <img src="{{ asset('storage/'.$pet->foto) }}" alt="{{ $pet->nama }}" class="rounded-circle shadow-sm" style="width: 50px; height: 50px; object-fit: cover;">
                            @else
                                <div class="rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center shadow-sm" style="width: 50px; height: 50px;">
                                    <i class="fas fa-paw text-success"></i>
                                </div>
                            @endif
                        </div>
                        <div>
                            <h6 class="mb-0 text-success">{{ $pet->nama }}</h6>
                            <small class="text-muted"><i class="fas fa-tag me-1"></i>{{ $pet->ras->nama }} - {{ $pet->jenisHewan->nama }}</small>
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-4">
                        <i class="fas fa-folder-open text-muted fa-3x mb-3"></i>
                        <p class="text-muted mb-0">Belum ada data hewan</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.bg-gradient-primary {
    background: linear-gradient(45deg, #4e73df, #224abe);
}
.bg-gradient-success {
    background: linear-gradient(45deg, #1cc88a, #13855c);
}
.bg-gradient-warning {
    background: linear-gradient(45deg, #f6c23e, #dda20a);
}
.bg-gradient-info {
    background: linear-gradient(45deg, #36b9cc, #258391);
}
.hover-bg-light:hover {
    background-color: rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}
.card {
    transition: transform 0.2s ease;
}
.card:hover {
    transform: translateY(-5px);
}
</style>
@endsection
