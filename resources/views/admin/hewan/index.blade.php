@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Daftar Hewan</h1>
        <a href="{{ route('admin.hewan.create') }}" class="btn btn-primary">
            <i class="fas fa-plus-circle me-1"></i> Tambah Hewan Baru
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Ras</th>
                            <th>Umur Perawatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($hewans as $key => $hewan)
                        <tr>
                            <td>{{ $hewans->firstItem() + $key }}</td>
                            <td>
                                <img src="{{ $hewan->gambar_utama }}" alt="{{ $hewan->nama }}" class="img-thumbnail" style="width: 80px; height: 80px; object-fit: cover;">
                            </td>
                            <td>{{ $hewan->nama }}</td>
                            <td>{{ $hewan->ras->nama_ras ?? '-' }}</td>
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
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.hewan.show', $hewan->id) }}" class="btn btn-sm btn-info text-white" title="Detail">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.hewan.edit', $hewan->id) }}" class="btn btn-sm btn-warning text-white" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.hewan.destroy', $hewan->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data {{ $hewan->nama }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-3">Belum ada data hewan</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center mt-3">
                {{ $hewans->links() }}
            </div>
        </div>
    </div>
</div>
@endsection