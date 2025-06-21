@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <!-- Header Section with Gradient -->
        <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-lg shadow-lg p-6 mb-6">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-white mb-2">Daftar Ras Hewan</h1>
                    <p class="text-purple-100">Kelola data ras hewan peliharaan</p>
                </div>
                <a href="{{ route('admin.ras.create') }}" 
                   class="bg-white text-purple-600 hover:bg-purple-50 transform hover:scale-105 transition-all duration-300 font-bold py-3 px-6 rounded-full shadow-md flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <span>Tambah Ras Baru</span>
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg shadow-md animate-fade-in">
                <div class="flex items-center">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    {{ session('success') }}
                </div>
            </div>
        @endif

        <div class="bg-white shadow-xl rounded-lg overflow-hidden border border-gray-100">
            <div class="p-6 bg-white border-b border-gray-100">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">No</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">Nama Ras</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">Jenis Hewan</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">Gambar</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @forelse($rasList as $index => $ras)
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="px-6 py-4">
                                <span class="text-sm text-gray-900">{{ $rasList->firstItem() + $index }}</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm font-medium text-gray-900">{{ $ras->nama }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 text-sm text-purple-600 bg-purple-100 rounded-full">
                                    {{ $ras->jenisHewan->nama }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                @if($ras->gambar_thumbnail)
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-12 w-12">
                                            <img src="{{ Storage::url($ras->gambar_thumbnail) }}" 
                                                 alt="{{ $ras->nama }}" 
                                                 class="h-12 w-12 rounded-lg object-cover shadow-sm hover:shadow-md transition-shadow duration-200">
                                        </div>
                                    </div>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                        No image
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm font-medium">
                                <div class="flex space-x-3">
                                    <a href="{{ route('admin.ras.show', $ras->id) }}" 
                                       class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-700 rounded-full hover:bg-blue-200 transition-colors duration-200">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                        View
                                    </a>
                                    <a href="{{ route('admin.ras.edit', $ras->id) }}" 
                                       class="inline-flex items-center px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full hover:bg-yellow-200 transition-colors duration-200">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.ras.destroy', $ras->id) }}" 
                                          method="POST" 
                                          class="inline-block"
                                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 rounded-full hover:bg-red-200 transition-colors duration-200">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center">
                                <div class="flex flex-col items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <p class="text-gray-500 text-lg mb-2">Belum ada data</p>
                                    <p class="text-gray-400 text-sm">Silakan tambah data ras hewan baru</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            </div>
            <div class="px-6 py-4 border-t border-gray-100">
                {{ $rasList->links() }}
            </div>
        </div>
    </div>

    @push('styles')
    <style>
        @keyframes fade-in {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in {
            animation: fade-in 0.5s ease-out;
        }
    </style>
    @endpush
@endsection
