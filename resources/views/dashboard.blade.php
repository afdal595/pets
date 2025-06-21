<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            <span class="flex items-center gap-2">
                <i class="fas fa-tachometer-alt text-indigo-600"></i>
                {{ __('Admin Dashboard') }}
            </span>
            <span class="text-base font-normal text-gray-500 dark:text-gray-400">Selamat datang, {{ Auth::user()->name }}</span>
        </h2>
    </x-slot>

    <div class="py-10 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-4xl mx-auto px-4">
            <!-- Statistik Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 flex flex-col items-center">
                    <i class="fas fa-paw fa-2x text-indigo-500 mb-2"></i>
                    <div class="text-lg font-semibold text-indigo-700">Total Ras</div>
                    <div class="text-2xl font-bold text-gray-800 dark:text-gray-100">{{ $jumlahRas ?? '-' }}</div>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 flex flex-col items-center">
                    <i class="fas fa-dog fa-2x text-green-500 mb-2"></i>
                    <div class="text-lg font-semibold text-green-700">Jenis Hewan</div>
                    <div class="text-2xl font-bold text-gray-800 dark:text-gray-100">{{ $jumlahJenis ?? '-' }}</div>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 flex flex-col items-center">
                    <i class="fas fa-users fa-2x text-pink-500 mb-2"></i>
                    <div class="text-lg font-semibold text-pink-700">Total User</div>
                    <div class="text-2xl font-bold text-gray-800 dark:text-gray-100">{{ $jumlahUser ?? '-' }}</div>
                </div>
            </div>
            <!-- End Statistik Section -->

            <!-- Menu Admin Section -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                <div class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-100 flex items-center gap-2">
                    <i class="fas fa-cogs text-indigo-500"></i> Menu Admin
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <a href="{{ route('admin.ras.index') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-3 rounded-lg shadow text-center flex flex-col items-center gap-2 transition">
                        <i class="fas fa-paw fa-lg"></i>
                        <span>Kelola Ras Hewan</span>
                    </a>
                    <a href="{{ route('admin.jenis.index') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-3 rounded-lg shadow text-center flex flex-col items-center gap-2 transition">
                        <i class="fas fa-dog fa-lg"></i>
                        <span>Kelola Jenis Hewan</span>
                    </a>
                    <a href="/" class="bg-gray-400 hover:bg-gray-600 text-white px-4 py-3 rounded-lg shadow text-center flex flex-col items-center gap-2 transition">
                        <i class="fas fa-home fa-lg"></i>
                        <span>Lihat Halaman Utama</span>
                    </a>
                    <!-- Tambahkan menu lain sesuai kebutuhan -->
                    <a href="{{ route('admin.ras.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 rounded-lg shadow text-center flex flex-col items-center gap-2 transition">
                        <i class="fas fa-plus fa-lg"></i>
                        <span>Tambah Ras Hewan</span>
                    </a>
                    <a href="{{ route('admin.jenis.create') }}" class="bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-3 rounded-lg shadow text-center flex flex-col items-center gap-2 transition">
                        <i class="fas fa-plus fa-lg"></i>
                        <span>Tambah Jenis Hewan</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .transition { transition: all 0.2s; }
    </style>
</x-app-layout>
