<?php
namespace App\Head\Parts\Nose;

use App\Head\Parts\Nose\Contract\NoseInterface;

class NoseClass implements NoseInterface
{

    public function onSmell()
    {
        echo "Something smells very nice!<br>";
    }

}