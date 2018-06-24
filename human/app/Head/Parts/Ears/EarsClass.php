<?php
namespace App\Head\Parts\Ears;


abstract class EarsClass
{
    abstract function onWiggle();

    public function onListen()
    {
        echo "Listened Brkove :) <br>";
    }
}