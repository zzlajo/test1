<?php
namespace App\Head\Parts\Mouth;


use App\Head\Parts\Mouth\Contract\MouthInterface;

class MouthClass implements MouthInterface
{

    public function onPutFood()
    {
        echo "Mmmmmmm delicious!<br>";
    }

}