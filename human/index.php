<?php

use App\HumanFactory;

require __DIR__.'/vendor/autoload.php';

$human = (new HumanFactory())->create();
$human->goToRestaurant();
$human->wiggleLeftSide();
$human->wiggleRightSide();
$human->jumpLeft();
$human->jumpRight();
$human->leftSide();
$human->rightSide();