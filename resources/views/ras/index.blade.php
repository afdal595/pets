@extends('layouts.app')

@section('title', 'Daftar Ras Hewan')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>
            <i class="fas fa-dog me-2"></i> Daftar Ras Hewan
        </h1>
        <a href="{{ route('ras.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i> Tambah Ras
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th width="50px">#</th>
                            <th>Gambar</th>
                            <th>Nama Ras</th>
                            <th>Jenis Hewan</th>
                            <th>Deskripsi</th>
                            <th width="120px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($ras as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if($item->gambar_thumbnail)
                                <img src="{{ asset('storage/' . $item->gambar_thumbnail) }}" 
                                     alt="{{ $item->nama }}" 
                                     class="img-thumbnail" 
                                     style="width: 60px; height: 60px; object-fit: cover;">
                                @else
                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center" 
                                     style="width: 60px; height: 60px;">
                                    <i class="fas fa-paw text-muted"></i>
                                </div>
                                @endif
                            </td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jenisHewan->nama }}</td>
                            <td>{{ Str::limit($item->deskripsi, 50) }}</td>
                            <td>
                                <a href="{{ route('ras.show', $item->id) }}" 
                                   class="btn btn-sm btn-info" 
                                   title="Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('ras.edit', $item->id) }}" 
                                   class="btn btn-sm btn-warning" 
                                   title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('ras.destroy', $item->id) }}" 
                                      method="POST" 
                                      class="d-inline"
                                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus ras ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4">
                                <i class="fas fa-database fa-2x text-muted mb-3"></i>
                                <p>Tidak ada data ras hewan</p>
                                <a href="{{ route('ras.create') }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-plus me-1"></i> Tambah Ras
                                </a>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($ras->hasPages())
            <div class="d-flex justify-content-center mt-4">
                {{ $ras->links() }}
            </div>
            @endif
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
@endsection