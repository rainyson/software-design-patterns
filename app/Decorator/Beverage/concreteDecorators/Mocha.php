<?php

namespace App\Decorator\Beverage\concreteDecorators;

use App\Decorator\Beverage\Beverage;
use App\Decorator\Beverage\CondimentDecorator;

class Mocha extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 0.5;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . " ,Mocha";
    }
}