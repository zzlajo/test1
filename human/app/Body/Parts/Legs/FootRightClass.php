<?php
namespace App\Body\Parts\Legs;


use App\Contract\MovableInterface;

class FootRightClass implements MovableInterface
{

    public function move()
    {
        echo "Wiggled right foot toes<br>";
    }

}