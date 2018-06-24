<?php
namespace App\Body\Parts\Legs;


use App\Contract\MovableInterface;

class FootLeftClass implements MovableInterface
{

    public function move()
    {
        echo "Wiggled left foot toes.<br>";
    }

}