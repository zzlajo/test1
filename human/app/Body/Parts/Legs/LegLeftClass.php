<?php
namespace App\Body\Parts\Legs;


use App\Contract\MovableInterface;

class LegLeftClass extends LegsClass
{

    public $foot_left;

    public function __construct(MovableInterface $foot_left)
    {
        $this->foot_left = $foot_left;
    }

    public function move()
    {
        echo "Step forwards with left leg.<br>";
    }

    public function onJump()
    {
        parent::onJump();
        echo " and jump start with left foot.<br>";
    }

}