@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Tambah Ras Hewan</h1>
        <a href="{{ route('admin.ras.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="{{ route('admin.ras.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('admin.ras._form')
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <h5 class="card-title mb-0">Panduan Pengisian</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2">
                            <i class="fas fa-info-circle text-primary me-2"></i>
                            Isi nama ras hewan dengan benar dan sesuai
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-info-circle text-primary me-2"></i>
                            Pilih jenis hewan yang sesuai
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-info-circle text-primary me-2"></i>
                            Upload gambar dengan format JPG/PNG/GIF
                        </li>
                        <li>
                            <i class="fas fa-info-circle text-primary me-2"></i>
                            Deskripsi harus jelas dan informatif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
