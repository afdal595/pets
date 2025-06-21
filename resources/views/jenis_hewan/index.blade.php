@extends('layouts.app')

@section('title', 'Daftar Jenis Hewan')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Daftar Jenis Hewan</h1>
        <a href="{{ route('jenis-hewan.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i> Tambah Jenis
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($jenisHewan as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ Str::limit($item->deskripsi, 50) }}</td>
                    <td>
                        <a href="{{ route('jenis-hewan.show', $item->id) }}" class="btn btn-sm btn-info" title="Detail">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('jenis-hewan.edit', $item->id) }}" class="btn btn-sm btn-warning" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('jenis-hewan.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection