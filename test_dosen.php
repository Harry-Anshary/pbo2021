<?php
use application\Dosen;
use application\Mahasiswa;
use application\frontend\MyDate;

require_once ('initialize.php');

$dos1 = new Dosen('123456789012345678', 'Dosen Keren', '0800000', '10000000', '12345678', 'Tenaga Pengajar');

$dos1->mengajar();
$dos1->meneliti();

$harry = new Mahasiswa('H1101191040', 'Harry Anshary', '31-03-2001', 'Lk');
$harry->tampilkanAngkatan();

$tanggal = new MyDate();
echo $tanggal->penanggalan();