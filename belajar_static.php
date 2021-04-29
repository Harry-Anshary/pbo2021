<?php
require_once('vendor/autoload.php');
use App\Mahasiswa;

// $harry = new Mahasiswa("H1101191040","Harry Anshary","31 Maret 2001","Laki - laki");
// $harry->bergerak();

Mahasiswa::bergerak();

echo Mahasiswa::$status . "<br/>";
$status_mahasiswa = Mahasiswa::NON_AKTIF;
echo $status_mahasiswa . "<br/><br/>";

echo Mahasiswa::hitungSks(20,4);
