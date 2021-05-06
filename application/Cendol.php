<?php
namespace App;

use App\Minuman;

class Cendol implements Minuman 
{
    public function buat()
    {
        echo "Tambahkan cendol, masukkan santan ";
        echo "dan air gula merah cair, ";
        echo "tambahkan es batu.<br/>";
    }

    public function minum()
    {
        echo "Disedot dengan pipet/sedotan/selang.<br/><br/>";
    }

    public function diberikanPadaTeman()
    {
        echo "Ini untukmu, tenang saja, tidak ada sianida di dalamnya.<br/>";
    }
}

?>