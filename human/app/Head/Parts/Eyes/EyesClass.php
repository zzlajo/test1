<?php
namespace App\Head\Parts\Eyes;


abstract class EyesClass
{

    abstract public function onWink();

    public function onLookUpwards()
    {
        echo "Looks like it is going to rain.<br>";
    }

}