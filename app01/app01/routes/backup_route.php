<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about',[
        'nama' => 'Rizky',
        'prodi' => 'Sistem Informasi'
    ]);
});
Route::get('/salam', function () {
    return "Assalamualaikum wr wb teman teman";
});
Route::get('/salam/{name}', function ($name) {
    return "Assalamualaikum wr wb teman teman $name";
});

route::get('produk', function () {
    return view('produk.index');
});

Route::get('/prodi', [ProdiController::class, 'show']);



Route::get('/pasien/show', [pasienController::class, 'show'])->name('pasien.show');

Route::get('pasien/show', [PasienController::class, 'show']);
Route::resource('paramediks', ParamedikController::class);

Route::get('/admin', [AdminController::class, 'index']);