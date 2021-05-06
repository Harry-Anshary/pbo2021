<?php

namespace App;

class EsJeruk implements Minuman
{
    public function buat()
    {
        echo "Masukkan blender";
    }

    public function minum()
    {
        echo "Minumlah";
    }
    
    public static function diLihat()
    {
        echo "Cuman boleh dilihat saja, tidak diminum.<br/><br/>";
    }
}