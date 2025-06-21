@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="font-bold text-xl">Detail Jenis Hewan: {{ $jenisHewan->nama }}</h1>
        <div>
            <a href="{{ route('admin.jenis.edit', $jenisHewan) }}" class="btn btn-warning text-white">
                <i class="fas fa-edit me-1"></i> Edit
            </a>
            <a href="{{ route('admin.jenis.index') }}" class="btn btn-secondary ms-2">
                <i class="fas fa-arrow-left me-1"></i> Kembali
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Informasi Umum</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="text-sm text-muted">Icon</label>
                        <div class="fs-2">
                            <i class="fas fa-{{ $jenisHewan->icon }}"></i>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="text-sm text-muted">Nama</label>
                        <p class="mb-0">{{ $jenisHewan->nama }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="text-sm text-muted">Deskripsi</label>
                        <p class="mb-0">{{ $jenisHewan->deskripsi ?? 'Tidak ada deskripsi' }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="text-sm text-muted">Tanggal Dibuat</label>
                        <p class="mb-0">{{ $jenisHewan->created_at->format('d M Y H:i') }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="text-sm text-muted">Terakhir Diperbarui</label>
                        <p class="mb-0">{{ $jenisHewan->updated_at->format('d M Y H:i') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Daftar Ras</h5>
                    <span class="badge bg-primary">{{ $jenisHewan->ras_count }} Ras</span>
                </div>
                <div class="card-body">
                    @if($jenisHewan->ras->count() > 0)
                        <div class="list-group list-group-flush">
                            @foreach($jenisHewan->ras as $ras)
                                <div class="list-group-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-1">{{ $ras->nama }}</h6>
                                            <small class="text-muted">{{ Str::limit($ras->deskripsi, 50) }}</small>
                                        </div>
                                        <a href="{{ route('admin.ras.show', $ras) }}" 
                                           class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center mb-0 py-3 text-muted">Belum ada data ras untuk jenis hewan ini</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
