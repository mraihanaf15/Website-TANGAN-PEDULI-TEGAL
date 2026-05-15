<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;

Route::get('/', [ProgramController::class, 'index']);
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');
Route::get('/program', function () {
    return view('program');
})->name('program');
Route::get('/donasi', function () {
    return view('donasi');
})->name('donasi');

// ADMIN
Route::get('/admin/program', [ProgramController::class, 'adminIndex']);
Route::get('/admin/program/create', [ProgramController::class, 'create']);
Route::post('/admin/program', [ProgramController::class, 'store']);
Route::get('/admin/program/{id}/edit', [ProgramController::class, 'edit']);
Route::put('/admin/program/{id}', [ProgramController::class, 'update']);
Route::delete('/admin/program/{id}', [ProgramController::class, 'destroy']);

// halaman form admin
Route::get('/admin/program', function () {
    return view('admin.program');
});

// proses simpan
Route::post('/admin/program', [ProgramController::class, 'store']);