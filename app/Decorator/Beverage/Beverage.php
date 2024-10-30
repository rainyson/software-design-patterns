<?php

namespace App\Decorator\Beverage;

abstract class Beverage
{
    public abstract function getDescription(): string;

    public abstract function cost(): float;
}