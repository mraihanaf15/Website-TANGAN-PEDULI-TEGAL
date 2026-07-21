<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProfileController;
use App\Models\Program;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

// =====================================================================
// SITEMAP XML
// =====================================================================

Route::get('/sitemap.xml', function () {

    $sitemap = Sitemap::create();

    // Halaman Utama
    $sitemap->add(
        Url::create(url('/'))
            ->setPriority(1.0)
    );

    // Halaman Publik
    $sitemap->add(
        Url::create(url('/tentang'))
            ->setPriority(0.8)
    );

    $sitemap->add(
        Url::create(url('/program'))
            ->setPriority(0.9)
    );

    $sitemap->add(
        Url::create(url('/donasi'))
            ->setPriority(0.9)
    );

    $sitemap->add(
        Url::create(url('/galeri'))
            ->setPriority(0.8)
    );

    // Detail Program Otomatis
    Program::all()->each(function ($program) use ($sitemap) {

        $sitemap->add(
            Url::create(route('program.show', $program->id))
                ->setPriority(0.8)
        );

    });

    return $sitemap;

})->name('sitemap');


// =====================================================================
// AREA PUBLIK (BEBAS DIAKSES SIAPA SAJA TANPA LOGIN)
// =====================================================================

// Beranda
Route::get('/', [ProgramController::class, 'index'])->name('beranda');

// Tentang Kami
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

// Rekam Jejak Program
Route::get('/program', [ProgramController::class, 'programSelesai'])->name('program');

// Detail Program
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
// AREA ADMIN
// =====================================================================

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {

    Route::get('/program', [ProgramController::class, 'adminIndex'])->name('program.index');

    Route::get('/program/create', [ProgramController::class, 'create'])->name('program.create');

    Route::post('/program', [ProgramController::class, 'store'])->name('program.store');

    Route::get('/program/{id}/edit', [ProgramController::class, 'edit'])->name('program.edit');

    Route::put('/program/{id}', [ProgramController::class, 'update'])->name('program.update');

    Route::delete('/program/{id}', [ProgramController::class, 'destroy'])->name('program.destroy');

});


// =====================================================================
// DASHBOARD
// =====================================================================

Route::get('/dashboard', function () {
    return redirect()->route('admin.program.index');
})->middleware(['auth', 'verified'])->name('dashboard');


// =====================================================================
// PROFILE
// =====================================================================

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';