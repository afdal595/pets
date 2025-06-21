@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="font-bold text-xl">Detail Ras: {{ $ras->nama }}</h1>
        <div>
            <a href="{{ route('admin.ras.edit', ['ras' => $ras]) }}" class="btn btn-warning text-white">
                <i class="fas fa-edit me-1"></i> Edit
            </a>
            <a href="{{ route('admin.ras.index') }}" class="btn btn-secondary ms-2">
                <i class="fas fa-arrow-left me-1"></i> Kembali
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Informasi Umum</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-4">
                            @if($ras->gambar)
                                <img src="{{ $ras->gambar }}" alt="{{ $ras->nama }}" class="img-fluid rounded">
                            @else
                                <div class="bg-secondary bg-opacity-10 rounded d-flex align-items-center justify-content-center" style="height: 200px">
                                    <i class="fas fa-image fa-3x text-secondary"></i>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                <tr>
                                    <th class="border-0 ps-0" style="width: 140px">Nama Ras</th>
                                    <td class="border-0">{{ $ras->nama }}</td>
                                </tr>
                                <tr>
                                    <th class="border-0 ps-0">Jenis Hewan</th>
                                    <td class="border-0">{{ $ras->jenisHewan->nama }}</td>
                                </tr>
                                <tr>
                                    <th class="border-0 ps-0">Total Hewan</th>
                                    <td class="border-0">{{ $ras->hewan_count ?? 0 }} ekor</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6 class="mb-3">Deskripsi</h6>
                        <p class="text-muted">{{ $ras->deskripsi ?: 'Tidak ada deskripsi' }}</p>
                    </div>

                    @if($ras->karakteristik)
                    <div class="mb-4">
                        <h6 class="mb-3">Karakteristik</h6>
                        <div class="text-muted">{{ $ras->karakteristik }}</div>
                    </div>
                    @endif

                    @if($ras->perawatan)
                    <div>
                        <h6 class="mb-3">Perawatan</h6>
                        <div class="text-muted">{{ $ras->perawatan }}</div>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Thumbnail</h5>
                </div>
                <div class="card-body">
                    @if($ras->gambar_thumbnail)
                        <img src="{{ $ras->gambar_thumbnail }}" alt="Thumbnail {{ $ras->nama }}" class="img-fluid rounded">
                    @else
                        <div class="bg-secondary bg-opacity-10 rounded d-flex align-items-center justify-content-center" style="height: 150px">
                            <i class="fas fa-image fa-2x text-secondary"></i>
                        </div>
                    @endif
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="card-title mb-0">Data Statistik</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <small class="text-muted d-block">Tanggal Dibuat</small>
                        <div>{{ $ras->created_at->format('d M Y H:i') }}</div>
                    </div>
                    <div>
                        <small class="text-muted d-block">Terakhir Diperbarui</small>
                        <div>{{ $ras->updated_at->format('d M Y H:i') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($ras->hewan && $ras->hewan->count() > 0)
    <div class="card shadow-sm mt-4">
        <div class="card-header">
            <h5 class="card-title mb-0">Daftar Hewan</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Biografi</th>
                            <th>Umur Min Perawatan</th>
                            <th>Umur Max Perawatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ras->hewan as $hewan)
                        <tr>
                            <td>{{ $hewan->nama }}</td>
                            <td>{{ Str::limit($hewan->biografi, 100) }}</td>
                            <td>{{ $hewan->umur_min_perawatan }} tahun</td>
                            <td>{{ $hewan->umur_max_perawatan }} tahun</td>
                            <td>
                                <a href="{{ route('admin.hewan.show', ['hewan' => $hewan]) }}" class="btn btn-sm btn-info text-white">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
