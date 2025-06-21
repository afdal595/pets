@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="page-header">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold mb-2">Tambah Jenis Hewan Baru</h1>
                <p class="text-blue-100">Tambahkan data jenis hewan baru ke dalam sistem</p>
            </div>
            <a href="{{ route('admin.jenis.index') }}" class="btn-secondary">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali
            </a>
        </div>
    </div>

    <!-- Form Card -->
    <div class="card mt-8">
        <div class="card-body">
            <form action="{{ route('admin.jenis.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Nama Jenis -->
                <div>
                    <label for="nama" class="form-label">Nama Jenis Hewan</label>
                    <input type="text" 
                           name="nama" 
                           id="nama" 
                           class="form-input" 
                           required 
                           placeholder="Contoh: Kucing, Anjing, Burung"
                           value="{{ old('nama') }}">
                    @error('nama')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Deskripsi -->
                <div>
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" 
                              id="deskripsi" 
                              rows="4" 
                              class="form-input" 
                              placeholder="Deskripsi singkat tentang jenis hewan ini...">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Icon Selection -->
                <div>
                    <label class="form-label">Icon Jenis Hewan</label>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-2">
                        <label class="icon-select-card">
                            <input type="radio" name="icon" value="cat" class="sr-only" checked>
                            <div class="p-4 border rounded-lg cursor-pointer hover:bg-purple-50 transition-colors">
                                <svg class="w-8 h-8 mx-auto text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12v7a2 2 0 01-2 2H6a2 2 0 01-2-2v-7M12 3v16m0 0l-3.5-3.5M12 19l3.5-3.5"/>
                                </svg>
                                <p class="text-center mt-2 text-sm font-medium">Kucing</p>
                            </div>
                        </label>
                        <label class="icon-select-card">
                            <input type="radio" name="icon" value="dog" class="sr-only">
                            <div class="p-4 border rounded-lg cursor-pointer hover:bg-purple-50 transition-colors">
                                <svg class="w-8 h-8 mx-auto text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                                </svg>
                                <p class="text-center mt-2 text-sm font-medium">Anjing</p>
                            </div>
                        </label>
                        <label class="icon-select-card">
                            <input type="radio" name="icon" value="bird" class="sr-only">
                            <div class="p-4 border rounded-lg cursor-pointer hover:bg-purple-50 transition-colors">
                                <svg class="w-8 h-8 mx-auto text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                                <p class="text-center mt-2 text-sm font-medium">Burung</p>
                            </div>
                        </label>
                        <label class="icon-select-card">
                            <input type="radio" name="icon" value="other" class="sr-only">
                            <div class="p-4 border rounded-lg cursor-pointer hover:bg-purple-50 transition-colors">
                                <svg class="w-8 h-8 mx-auto text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                </svg>
                                <p class="text-center mt-2 text-sm font-medium">Lainnya</p>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end mt-6">
                    <button type="submit" class="btn-primary">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                        Simpan Jenis Hewan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('styles')
<style>
    .icon-select-card input:checked + div {
        @apply border-purple-500 bg-purple-50 ring-2 ring-purple-500 ring-offset-2;
    }
    
    .form-input:focus {
        @apply ring-2 ring-purple-500 ring-offset-2 border-purple-500;
    }
</style>
@endpush
@endsection
