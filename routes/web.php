<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\RasController;
use App\Http\Controllers\JenisHewanController;

// Welcome page
Route::get('/', function () {
    return view('welcome');
});

// Main home page
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Breed routes
Route::get('/breeds', [HomeController::class, 'breeds'])->name('breeds.index');
Route::get('/breeds/cats', [HomeController::class, 'breeds'])->defaults('type', 'cat')->name('breeds.cats');
Route::get('/breeds/dogs', [HomeController::class, 'breeds'])->defaults('type', 'dog')->name('breeds.dogs');

// All breed routes use direct views from breeds folder
Route::get('/breeds/{breed}', function($breed) {
    // Convert URL-friendly name to view name (e.g. shih-tzu -> shih-tzu)
    $viewName = str_replace('-', '-', $breed);
    
    // Check if a matching blade file exists in breeds folder
    if (view()->exists('breeds.' . $viewName)) {
        return view('breeds.' . $viewName);
    }
    
    // If view doesn't exist, return 404
    abort(404, 'Breed not found');
})->name('breed.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Login Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'login']);
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');
    // Route dashboard admin diarahkan ke AdminController@index
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'index'])->middleware('admin')->name('dashboard');
    // Route utama /admin juga diarahkan ke AdminController@index
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->middleware('admin')->name('home');
    Route::middleware(['auth', 'admin'])->group(function () {
        // Resources untuk ras dan jenis hewan
        Route::controller(JenisHewanController::class)->group(function () {
            // Resource routes for JenisHewan
            Route::get('/jenis', 'index')->name('jenis.index');
            Route::get('/jenis/create', 'create')->name('jenis.create');
            Route::post('/jenis', 'store')->name('jenis.store');
            Route::get('/jenis/{jenisHewan}', 'show')->name('jenis.show');
            Route::get('/jenis/{jenisHewan}/edit', 'edit')->name('jenis.edit');
            Route::put('/jenis/{jenisHewan}', 'update')->name('jenis.update');
            Route::delete('/jenis/{jenisHewan}', 'destroy')->name('jenis.destroy');
            
            // API route for getting Ras by JenisHewan
            Route::get('/jenis/{jenisHewan}/ras', 'getRasByJenis')->name('jenis.ras');
        });
        Route::resource('ras', \App\Http\Controllers\Admin\RasController::class)->parameters([
            'ras' => 'ras'
        ]);
        
        // Routes untuk CRUD hewan
        Route::get('/hewan', [\App\Http\Controllers\HewanController::class, 'adminIndex'])->name('hewan.index');
        Route::get('/hewan/create', [\App\Http\Controllers\HewanController::class, 'adminCreate'])->name('hewan.create');
        Route::post('/hewan', [\App\Http\Controllers\HewanController::class, 'adminStore'])->name('hewan.store');
        Route::get('/hewan/{hewan}', [\App\Http\Controllers\HewanController::class, 'adminShow'])->name('hewan.show');
        Route::get('/hewan/{hewan}/edit', [\App\Http\Controllers\HewanController::class, 'adminEdit'])->name('hewan.edit');
        Route::put('/hewan/{hewan}', [\App\Http\Controllers\HewanController::class, 'adminUpdate'])->name('hewan.update');
        Route::delete('/hewan/{hewan}', [\App\Http\Controllers\HewanController::class, 'adminDestroy'])->name('hewan.destroy');
    });
});

// Rute untuk halaman login admin
Route::get('/admin/login', [\App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm'])->name('admin.login');

// Rute untuk menambahkan ras hewan
Route::get('/admin/ras/create', [\App\Http\Controllers\AdminController::class, 'createRas'])->middleware('admin')->name('admin.ras.create');

// Rute ini sudah tidak diperlukan karena sudah ada di resource routes di atas

// Rute khusus untuk halaman Bulldog
Route::get('/bulldog', function () {
    return view('bulldog');
})->name('bulldog.show');

// Rute khusus untuk halaman Golden Retriever
Route::get('/golden-retriever', function () {
    return view('golden-retriever');
})->name('golden-retriever.show');

require __DIR__.'/auth.php';