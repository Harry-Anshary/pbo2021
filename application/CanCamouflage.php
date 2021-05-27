<?php

namespace App;

/**
 * Trait untuk kamuflase
 */
trait CanCamouflage
{
    public function camouflage()
    {
        echo "Sebagai bunglon, ".$this->name." sudah ";
        echo "tentu dapat melakukan kamuflase<br>";
    }
}
