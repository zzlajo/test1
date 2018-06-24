<?php
namespace App\Body\Parts\Arms;


use App\Contract\MovableInterface;

class ArmRightClass extends ArmsClass
{

    public $hand_right;

    public function __construct(MovableInterface $hand_right)
    {
        $this->hand_right = $hand_right;
    }

    public function move()
    {
        echo "Swung right arm forwards.<br>";
    }

    public function onApplaud()
    {
        echo "Applaud with hands, right hand is up.<br>";
    }

}