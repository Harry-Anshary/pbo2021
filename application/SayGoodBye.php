<?php   

namespace App;

/**
 * Trait for say good bye
 */
trait SayGoodBye
{
    public function goodBye($name)
    {
        if (is_null($name)){
            echo "Good bye<br>";
        } else{
            echo "Good bye ".$name."<br>";
        }
    }
}