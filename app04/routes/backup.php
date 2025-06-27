<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\AdminController;

Route::resource('pasien', PasienController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        'nama' => 'Shakyla',
        'prodi' => 'Sistem Informasi',
    ]);
});

Route::get('/salam', function () {
    return 'Assalamualaikum wr.wb teman-teman';
});

Route::get('/salam/{name}', function ($name) {
    return 'Assalamualaikum wr.wb teman-teman $name';
});

Route::get('/produk', function () {
    return view('produk.index');
});

Route::get('/produk/{id}', function ($id) {
    return view('produk.index', ['idproduk'=>$id]);
});Route::get('/salam/{name}', function ($name) {
    return 'Assalamualaikum wr.wb teman-teman ' . $name;
});

//use App\Http\Controllers\ProdiController;
//Route::get('/prodi', [ProdiController::class, 'show'])-> name ('prodi.show');

Route::get('/pasien/show',[PasienController::class, 'show']);
Route::get('/pasien/index',[PasienController::class, 'index'])->name('pasien,index');
Route::get('/pasien/create',[PasienController::class, 'create'])->name('pasien,create');
Route::get('/pasien/store',[PasienController::class, 'store'])->name('pasien,store');
Route::get('/admin', [AdminController::class,'index']);