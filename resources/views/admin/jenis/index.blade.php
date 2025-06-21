@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="font-bold text-xl">Daftar Jenis Hewan</h1>
        <a href="{{ route('admin.jenis.create') }}" class="btn btn-primary">
            <i class="fas fa-plus-circle me-1"></i> Tambah Jenis Hewan
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Icon</th>
                            <th>Jumlah Ras</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($jenisHewan as $index => $jenis)
                            <tr>
                                <td>{{ $jenisHewan->firstItem() + $index }}</td>
                                <td>{{ $jenis->nama }}</td>
                                <td>{{ Str::limit($jenis->deskripsi, 50) }}</td>
                                <td>
                                    <i class="fas fa-{{ $jenis->icon }}"></i>
                                </td>
                                <td>{{ $jenis->ras_count }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.jenis.show', $jenis) }}" 
                                           class="btn btn-sm btn-info text-white" 
                                           title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.jenis.edit', $jenis) }}" 
                                           class="btn btn-sm btn-warning text-white" 
                                           title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.jenis.destroy', $jenis) }}" 
                                              method="POST" 
                                              class="d-inline" 
                                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus jenis hewan ini?');">
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
                                <td colspan="6" class="text-center py-3">Tidak ada data jenis hewan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $jenisHewan->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
