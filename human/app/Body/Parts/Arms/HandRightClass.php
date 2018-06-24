<?php
namespace App\Body\Parts\Arms;


use App\Contract\MovableInterface;

class HandRightClass implements MovableInterface
{

    public function move()
    {
        echo "Wiggled right arm fingers.<br>";
    }

}