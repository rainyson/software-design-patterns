<?php

namespace App\Decorator\Beverage\concreteDecorators;

use App\Decorator\Beverage\Beverage;
use App\Decorator\Beverage\CondimentDecorator;

class Soy extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 0.9;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription(). " ,Soy";
    }
}