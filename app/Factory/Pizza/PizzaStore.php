<?php

namespace App\Factory\Pizza;

use App\Factory\Pizza\Pizzas\Pizza;

abstract class PizzaStore
{
    public Pizza $pizza;

    public function __construct()
    {
    }

    public function orderPizza(string $type): Pizza
    {
        $this->pizza = $this->createPizza($type);
        $this->pizza->prepare();
        $this->pizza->bake();
        $this->pizza->cut();
        $this->pizza->box();
        return $this->pizza;
    }

    public abstract function createPizza(string $type): Pizza;
}