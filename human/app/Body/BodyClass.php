<?php
namespace App\Body;
use App\Body\Contract\BodyInterface;
use App\Body\Parts\Arms\ArmsClass;
use App\Body\Parts\Legs\LegsClass;

class BodyClass implements BodyInterface
{
    public $leg_left;
    public $leg_right;
    public $arm_left;
    public $arm_right;

    public function __construct(LegsClass $leg_left, LegsClass $leg_right, ArmsClass $arm_left, ArmsClass $arm_right)
    {
        $this->leg_left = $leg_left;
        $this->leg_right = $leg_right;
        $this->arm_left = $arm_left;
        $this->arm_right = $arm_right;
    }

    public function onWiggleLeftSide()
    {
        $this->arm_left->hand_left->move();
        $this->leg_left->foot_left->move();
    }

    public function onWiggleRightSide()
    {
        $this->arm_right->hand_right->move();
        $this->leg_right->foot_right->move();
    }

}