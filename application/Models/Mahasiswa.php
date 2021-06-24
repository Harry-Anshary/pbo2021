<?php

namespace App\Models;

class Mahasiswa extends Pengguna
{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;

    function __construct($un,$pw,$email,$nim,$nama,$ipk,$alamat){
        $this->username = $un;
        $this->password = $pw;
        $this->email = $email;
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $ipk;
        $this->alamat = $alamat;
    }

    public function inputMatkul()
    {
        # code...
    }

    public function updateProfil()
    {
        # code...
    }
}
