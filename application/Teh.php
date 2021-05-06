<?php

namespace App;

class Teh implements Minuman
{
    public function buat()
    {
        echo "Tuangkan air hangat/panas kedalam gelas, ";
        echo "kemudian masukkan teh celup ke dalam gelas, ";
        echo "tunggu hingga air berubah warna. ";
        echo "Setelah dirasa pas, tambahkan gula secukupnya, ";
        echo "aduk hingga gula larut dalam teh.<br/>";
    }

    public function minum()
    {
        echo "Dapat diminum secara sedikit sedikit atau langsung dihabiskan.<br/>";
    }
    
    public function tambahEs()
    {
        echo "Tambahkan es batu untuk dinikmati secara dingin.<br/>";
    }
}
