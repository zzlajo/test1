<?php
namespace App\Head;


use App\Head\Contract\HeadInterface;
use App\Head\Parts\Ears\EarsClass;
use App\Head\Parts\Eyes\EyesClass;
use App\Head\Parts\Mouth\Contract\MouthInterface;
use App\Head\Parts\Nose\Contract\NoseInterface;

class HeadClass implements HeadInterface
{

    public $ear_left;
    public $ear_right;
    public $eye_left;
    public $eye_right;
    public $mouth;
    public $nose;

    public function __construct(EarsClass $ear_left, EarsClass $ear_right, EyesClass $eye_left, EyesClass $eye_right, MouthInterface $mouth, NoseInterface $nose)
    {
        $this->ear_left = $ear_left;
        $this->ear_right = $ear_right;
        $this->eye_left = $eye_left;
        $this->eye_right = $eye_right;
        $this->mouth = $mouth;
        $this->nose = $nose;
    }

    public function onThink()
    {
        echo "Thought about SOLID principles.<br>";
    }

    public function onRandomWink()
    {
        rand(0,1) ? $this->eye_left->onWink() : $this->eye_right->onWink();
    }

}