<?php

namespace App\Models;

interface Pegawai  
{
    /**
     * Methode pada interfae tidak bisa private
     * Jadi saya menggunakan public karena fungsi
     * Dari methode pada interface adalah untuk
     * Diturunkan (inherited) kepada kelas lain
     */

    public function setNip($nip);

    public function presensiMasuk();

    public function getNip();

    public function setNama($nama);

    public function getNama();
}