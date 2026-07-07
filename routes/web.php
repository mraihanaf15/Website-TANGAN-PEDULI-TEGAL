<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProfileController;

// =====================================================================
// AREA PUBLIK (BEBAS DIAKSES SIAPA SAJA TANPA LOGIN)
// =====================================================================

// Beranda (Memanggil data program berstatus 'akan_datang')
Route::get('/', [ProgramController::class, 'index'])->name('beranda');

// Tentang Kami
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

// Rekam Jejak Program (Memanggil data program berstatus 'selesai')
Route::get('/program', [ProgramController::class, 'programSelesai'])->name('program');

// Detail Program Dinamis
Route::get('/program/detail/{id}', [ProgramController::class, 'show'])->name('program.show');

// Donasi
Route::get('/donasi', function () {
    return view('donasi');
})->name('donasi');

// Galeri
Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');


// =====================================================================
// AREA PRIVAT (WAJIB LOGIN & HANYA UNTUK ADMIN)
// =====================================================================

// Perhatikan tambahan ->middleware(['auth', 'admin']) di sini.
// Ini adalah "Penjaga Pintu" yang kita buat tadi.
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    
    // Tampil Data Tabel
    Route::get('/program', [ProgramController::class, 'adminIndex'])->name('program.index');
    
    // Form Tambah
    Route::get('/program/create', [ProgramController::class, 'create'])->name('program.create');
    
    // Proses Simpan Tambah
    Route::post('/program', [ProgramController::class, 'store'])->name('program.store');
    
    // Form Edit
    Route::get('/program/{id}/edit', [ProgramController::class, 'edit'])->name('program.edit');
    
    // Proses Simpan Edit
    Route::put('/program/{id}', [ProgramController::class, 'update'])->name('program.update');
    
    // Proses Hapus
    Route::delete('/program/{id}', [ProgramController::class, 'destroy'])->name('program.destroy');
    
});


// =====================================================================
// PENGATURAN BAWAAN LARAVEL BREEZE (OTOMATIS)
// =====================================================================

// MENGUBAH ALUR LOGIN: 
// Jika admin sukses login, langsung arahkan ke tabel program, bukan ke halaman kosong.
Route::get('/dashboard', function () {
    return redirect()->route('admin.program.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profil bawaan Breeze (Biarkan saja untuk pengaturan ganti password)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';