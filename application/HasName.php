<?php

namespace App;

/**
 * Trait untuk mengecek nama
 */
trait HasName
{
    public $name;

    public function cekNama()
    {
        echo "Namanya adalah ".$this->name."<br>";
    }
}
