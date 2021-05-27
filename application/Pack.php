<?php

namespace App;

/**
 * Trait to inherit another traits
 */
trait Pack
{
    use CanCamouflage, CanClimb, IsSleeping, HasName{
    sleep as public;
    }
    public function climb()
    {
        echo $this->name." juga dapat memanjat<br>";
    }
}
