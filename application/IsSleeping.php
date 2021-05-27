<?php

namespace App;

/**
 * Trait for visiblity override
 */
trait IsSleeping
{
    private function sleep()
    {
        echo "Sedang tidur";
    }
}
