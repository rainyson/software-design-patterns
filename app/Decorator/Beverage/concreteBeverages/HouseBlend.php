<?php

namespace App\Decorator\Beverage\concreteBeverages;

use App\Decorator\Beverage\Beverage;

class HouseBlend extends Beverage
{
    public function cost(): float
    {
        return 1.8;
    }

    public function getDescription(): string
    {
        return "This is HouseBlend";
    }
}