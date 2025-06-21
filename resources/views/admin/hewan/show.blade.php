@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Detail Hewan: {{ $hewan->nama }}</h1>
        <div>
            <a href="{{ route('admin.hewan.edit', $hewan->id) }}" class="btn btn-warning text-white">
                <i class="fas fa-edit me-1"></i> Edit
            </a>
            <a href="{{ route('admin.hewan.index') }}" class="btn btn-secondary ms-2">
                <i class="fas fa-arrow-left me-1"></i> Kembali
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Gambar Utama</h5>
                </div>
                <div class="card-body text-center">
                    <img src="{{ $hewan->gambar_utama }}" alt="{{ $hewan->nama }}" class="img-fluid rounded mb-3" style="max-height: 300px;">
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Informasi Hewan</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th style="width: 30%">ID</th>
                                <td>{{ $hewan->id }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $hewan->nama }}</td>
                            </tr>
                            <tr>
                                <th>Ras</th>
                                <td>{{ $hewan->ras->nama_ras ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Hewan</th>
                                <td>{{ $hewan->ras->jenisHewan->nama_jenis ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Umur Perawatan</th>
                                <td>
                                    @if($hewan->umur_min_perawatan && $hewan->umur_max_perawatan)
                                        {{ $hewan->umur_min_perawatan }} - {{ $hewan->umur_max_perawatan }} bulan
                                    @elseif($hewan->umur_min_perawatan)
                                        Min. {{ $hewan->umur_min_perawatan }} bulan
                                    @elseif($hewan->umur_max_perawatan)
                                        Maks. {{ $hewan->umur_max_perawatan }} bulan
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Tanggal Dibuat</th>
                                <td>{{ $hewan->created_at->format('d M Y H:i:s') }}</td>
                            </tr>
                            <tr>
                                <th>Terakhir Diperbarui</th>
                                <td>{{ $hewan->updated_at->format('d M Y H:i:s') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card shadow mt-4">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">Biografi / Deskripsi</h5>
                </div>
                <div class="card-body">
                    @if($hewan->biografi)
                        {!! nl2br(e($hewan->biografi)) !!}
                    @else
                        <p class="text-muted">Tidak ada deskripsi.</p>
                    @endif
                </div>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <form action="{{ route('admin.hewan.destroy', $hewan->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data {{ $hewan->nama }}?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash me-1"></i> Hapus Hewan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
