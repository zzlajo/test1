<?php
namespace App\Body\Parts\Legs;


use App\Contract\MovableInterface;

abstract class LegsClass implements MovableInterface
{

    protected function onJump()
    {
        echo "With my legs I can jump ";
    }



}