<?php
namespace App\models;

class Prodi
{
    public $kode;
    public $nama;
    public $Kaprodi;

    public function __construct($kode, $nama, $Kaprodi)
    {
        $this->$kode = $kode;
        $this->$nama = $nama;
        $this->$kaprodi = $kaprodi;
        
    }
}