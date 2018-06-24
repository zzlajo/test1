<?php
namespace App\Body\Parts\Arms;


use App\Contract\MovableInterface;

class ArmLeftClass extends ArmsClass
{
    public $hand_left;

    public function __construct(MovableInterface $hand_left)
    {
        $this->hand_left = $hand_left;
    }

    public function move()
    {
        echo "Swung left arm forwards.<br>";
    }

    public function onApplaud()
    {
        echo "Applaud with hands, left hand is up.<br>";
    }

}