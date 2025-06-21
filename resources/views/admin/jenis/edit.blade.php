@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="font-bold text-xl">Edit Jenis Hewan: {{ $jenisHewan->nama }}</h1>
        <a href="{{ route('admin.jenis.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.jenis.update', $jenisHewan) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Jenis Hewan <span class="text-danger">*</span></label>
                    <input type="text" 
                           class="form-control @error('nama') is-invalid @enderror" 
                           id="nama" 
                           name="nama" 
                           value="{{ old('nama', $jenisHewan->nama) }}" 
                           required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                              id="deskripsi" 
                              name="deskripsi" 
                              rows="3">{{ old('deskripsi', $jenisHewan->deskripsi) }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Icon <span class="text-danger">*</span></label>
                    <div class="d-flex gap-4">
                        <div class="form-check">
                            <input class="form-check-input" 
                                   type="radio" 
                                   name="icon" 
                                   id="iconCat" 
                                   value="cat" 
                                   {{ (old('icon', $jenisHewan->icon) == 'cat') ? 'checked' : '' }}
                                   required>
                            <label class="form-check-label" for="iconCat">
                                <i class="fas fa-cat fa-2x"></i>
                                <span class="d-block mt-1">Kucing</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" 
                                   type="radio" 
                                   name="icon" 
                                   id="iconDog" 
                                   value="dog" 
                                   {{ (old('icon', $jenisHewan->icon) == 'dog') ? 'checked' : '' }}>
                            <label class="form-check-label" for="iconDog">
                                <i class="fas fa-dog fa-2x"></i>
                                <span class="d-block mt-1">Anjing</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" 
                                   type="radio" 
                                   name="icon" 
                                   id="iconBird" 
                                   value="bird" 
                                   {{ (old('icon', $jenisHewan->icon) == 'bird') ? 'checked' : '' }}>
                            <label class="form-check-label" for="iconBird">
                                <i class="fas fa-dove fa-2x"></i>
                                <span class="d-block mt-1">Burung</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" 
                                   type="radio" 
                                   name="icon" 
                                   id="iconOther" 
                                   value="other" 
                                   {{ (old('icon', $jenisHewan->icon) == 'other') ? 'checked' : '' }}>
                            <label class="form-check-label" for="iconOther">
                                <i class="fas fa-paw fa-2x"></i>
                                <span class="d-block mt-1">Lainnya</span>
                            </label>
                        </div>
                    </div>
                    @error('icon')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
