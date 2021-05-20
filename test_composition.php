<?php

use App\Pengguna;
use App\Alamat;

require_once('vendor/autoload.php');

$pengguna = new Pengguna (3,"Harry Anshary", new Alamat(14, "Kubu Raya"));

$alamat_pengguna = $pengguna->getAlamat();
echo $alamat_pengguna->getKota();