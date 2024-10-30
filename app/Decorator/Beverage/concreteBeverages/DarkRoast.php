<?php

namespace App\Decorator\Beverage\concreteBeverages;

use App\Decorator\Beverage\Beverage;

class DarkRoast extends Beverage
{

    public function cost(): float
    {
        return 2;
    }

    public function getDescription(): string
    {
        return "This is DarkRoast";
    }
}