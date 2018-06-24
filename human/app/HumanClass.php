<?php
namespace App;


use App\Body\Contract\BodyInterface;
use App\Head\Contract\HeadInterface;

class HumanClass
{
    public $head;
    public $body;

    public function __construct(HeadInterface $head, BodyInterface $body)
    {
        $this->head = $head;
        $this->body = $body;
    }

    private function walk($steps = 4)
    {
        for($i=1; $i<=$steps; $i++)
        {
            if ($i % 2 == 0){
                $this->body->leg_left->move();
                $this->body->arm_right->move();
            } else {
                $this->body->leg_right->move();
                $this->body->arm_left->move();
            }
        }
    }

    public function goToRestaurant()
    {
        $this->walk(2);
        $this->head->onRandomWink();
        $this->head->eye_left->onLookUpwards();
        $this->head->nose->onSmell();
        $this->head->mouth->onPutFood();
        $this->body->arm_right->onApplaud();
        $this->head->ear_left->onListen();
        $this->head->onThink();
        echo "<br>";
    }

    public function wiggleLeftSide()
    {
        $this->body->onWiggleLeftSide();
        $this->head->ear_left->onWiggle();
        echo "<br>";
    }

    public function wiggleRightSide()
    {
        $this->body->onWiggleRightSide();
        $this->head->ear_right->onWiggle();
        echo "<br>";
    }

    public function jumpLeft()
    {
        $this->walk(4);
        $this->body->leg_left->onJump();
        echo "<br>";
    }

    public function jumpRight()
    {
        $this->walk(3);
        $this->body->leg_right->onJump();
        echo "<br>";
    }

    public function leftSide()
    {
        $this->head->eye_left->onWink();
        $this->head->ear_left->onWiggle();
        $this->body->arm_left->move();
        $this->body->onWiggleLeftSide();
        $this->body->leg_left->move();
        $this->body->leg_left->onJump();
        echo "<br>";
    }

    public function rightSide()
    {
        $this->head->eye_right->onWink();
        $this->head->ear_right->onWiggle();
        $this->body->arm_right->move();
        $this->body->onWiggleRightSide();
        $this->body->leg_right->move();
        $this->body->leg_right->onJump();
        echo "<br>";
    }


}