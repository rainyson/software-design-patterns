<?php

namespace App\Decorator\Beverage\concreteBeverages;

use App\Decorator\Beverage\Beverage;

class Espresso extends Beverage
{

    public function cost(): float
    {
        return 1.5;
    }

    public function getDescription(): string
    {
        return "This is Espresso";
    }
}