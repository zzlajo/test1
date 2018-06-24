<?php
namespace App\Body\Parts\Arms;


use App\Contract\MovableInterface;

abstract class ArmsClass implements MovableInterface
{

    abstract public function onApplaud();

}