<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;
class ProdiController extends Controller
{
    public function show(){
        $prodi1 = new Prodi('SI', 'Sistem Informasi', 'Misna Aqsia M.Kom');
        $prodi2 = new Prodi('TI', 'Teknik Informatika', 'Tiffany Nabarian M.TI');
        $prodi3 = new Prodi('BD', 'Bisnis Digital', 'Dr. Amalia Rahmah M.TI');
        $ar_prodi = [$prodi1, $prodi2, $prodi3]; 

        return view('prodi.index', [
            'judul' => 'Data Program Studi',
            'ar_prodi' => $ar_prodi,

        ]);
    }
}