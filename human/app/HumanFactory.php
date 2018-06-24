<?php
namespace App;


use App\Body\BodyClass;
use App\Body\Parts\Arms\ArmLeftClass;
use App\Body\Parts\Arms\ArmRightClass;
use App\Body\Parts\Arms\HandLeftClass;
use App\Body\Parts\Arms\HandRightClass;
use App\Body\Parts\Legs\FootLeftClass;
use App\Body\Parts\Legs\FootRightClass;
use App\Body\Parts\Legs\LegLeftClass;
use App\Body\Parts\Legs\LegRightClass;
use App\Head\HeadClass;
use App\Head\Parts\Ears\EarLeftClass;
use App\Head\Parts\Ears\EarRightClass;
use App\Head\Parts\Eyes\EyeLeftClass;
use App\Head\Parts\Eyes\EyeRightClass;
use App\Head\Parts\Mouth\MouthClass;
use App\Head\Parts\Nose\NoseClass;

class HumanFactory
{

    public function create()
    {
        return new HumanClass(
            new HeadClass(
                new EarLeftClass(),
                new EarRightClass(),
                new EyeLeftClass(),
                new EyeRightClass(),
                new MouthClass(),
                new NoseClass()
            ),
            new BodyClass(
                new LegLeftClass(new FootLeftClass()),
                new LegRightClass(new FootRightClass()),
                new ArmLeftClass(new HandLeftClass()),
                new ArmRightClass(new HandRightClass())
            )
        );
    }

}