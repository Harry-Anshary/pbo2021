<?php

require_once('vendor/autoload.php');

use App\Pengguna;
use App\Penjual;
use App\Alamat;

$harry = new Pengguna(3,"Harry Anshary", new Alamat(14, "Kubu Raya"));

$lapak_budi = new Penjual();
$lapak_budi->setName('Budi Sahaja');
$lapak_budi->setId(1);

$lapak_andi = new Penjual();
$lapak_andi->setName('Andi Yaja');
$lapak_andi->setId(2);

$lapak_wali = new Penjual();
$lapak_wali->setName('Wali Murdi');
$lapak_wali->setId(3);

$harry->setPenjual($lapak_budi);
$harry->setPenjual($lapak_andi);
$harry->setPenjual($lapak_wali);

$penjual_harry = $harry->getPenjual();
echo $penjual_harry[0]->getName();// Ada 3 Index (0,1,2)