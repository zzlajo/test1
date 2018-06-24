<?php


namespace App\Body\Parts\Arms;


use App\Contract\MovableInterface;

class HandLeftClass implements MovableInterface
{

    public function move()
    {
        echo "Wiggled left arm fingers.<br>";
    }

}