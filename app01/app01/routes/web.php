<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
Route::get('/pasien/show', [pasienController::class, 'show'])
->name('pasien.show');
});
Route::get('/pasien/index', [PasienController::class,'index'])->name('pasien.index');

Route::get('/pasien/create', [PasienController::class, 'create'])
    ->name('pasien.create');

Route::get('/pasien/store', [PasienController::class, 'store'])
    ->name('pasien.store');


Route::resource('paramediks', ParamedikController::class);

Route::get('/admin', [AdminController::class, 'index']);



