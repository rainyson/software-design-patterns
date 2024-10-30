<?php

namespace App\Factory\Pizza;

use App\Factory\Pizza\Pizzas\CheesePizza;
use App\Factory\Pizza\Pizzas\ClamPizza;
use App\Factory\Pizza\Pizzas\GreekPizza;
use App\Factory\Pizza\Pizzas\PepperoniPizza;
use App\Factory\Pizza\Pizzas\Pizza;
use App\Factory\Pizza\Pizzas\VeggiePizza;

class SimplePizzaFactory
{
    public Pizza $pizza;

    public function createPizza(string $type): Pizza
    {
        if ($type === 'cheese') {
            $this->pizza = new CheesePizza();
        } else if ($type === 'greek') {
            $this->pizza = new GreekPizza();
        } else if ($type === 'pepperoni') {
            $this->pizza = new PepperoniPizza();
        } else if ($type === 'clam') {
            $this->pizza = new ClamPizza();
        } else if ($type === 'veggie') {
            $this->pizza = new VeggiePizza();
        }
        return $this->pizza;
    }
}