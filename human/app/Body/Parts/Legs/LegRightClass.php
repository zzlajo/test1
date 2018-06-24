<?php
namespace App\Body\Parts\Legs;


use App\Contract\MovableInterface;

class LegRightClass extends LegsClass
{
    public $foot_right;

    public function __construct(MovableInterface $foot_right)
    {
        $this->foot_right = $foot_right;
    }

    public function move()
    {
        echo "Step forwards with right leg.<br>";
    }

    public function onJump()
    {
        parent::onJump();
        echo " and jump start with right foot.<br>";

    }

}