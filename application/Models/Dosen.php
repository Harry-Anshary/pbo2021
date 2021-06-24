<?php

namespace App\Models;

class Dosen extends Pengguna implements Pegawai
{
    private $nip;
    private $nama;
    private $no_telp;

    function __construct($un,$pw,$email,$nip,$nama,$nt){
        $this->username = $un;
        $this->password = $pw;
        $this->email = $email;
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_telp = $nt;
    }

    public function validasiMahasiswa()
    {
        # code...
    }

    public function presensiMasuk()
    {
        # code...
    }

    public function setNip($nip)
    {
        # code...
    }

    public function getNip()
    {
        # code...
    }

    public function setNama($nama)
    {
        # code...
    }

    public function getNama()
    {
        # code...
    }
}
