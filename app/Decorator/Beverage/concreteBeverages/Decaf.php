<?php

namespace App\Decorator\Beverage\concreteBeverages;

use App\Decorator\Beverage\Beverage;

class Decaf extends Beverage
{
    public function cost(): float
    {
        return 2.1;
    }

    public function getDescription(): string
    {
        return "This is Decaf";
    }
}