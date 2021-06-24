<?php

namespace App\Models;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class PerguruanTinggi  
{
    public $id;
    public $namaPT;
    protected $akreditasi;
    public $mahasiswas = array();
    public $dosens;

    function __construct($id,$npt,$akr,$dosen)
    {
        $this->id = $id;
        $this->namaPT = $npt;
        $this->akreditasi = $akr;
        $this->dosens - $dosen;
    }

    public function registerMaba($nim,$nama)
    {
        # code...
    }

    public function getDosen()
    {
        # code...
    }
}
