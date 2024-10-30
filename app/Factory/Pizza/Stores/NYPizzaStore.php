<?php

namespace App\Factory\Pizza\Stores;

use App\Factory\Pizza\Pizzas\NY\NYStyleCheesePizza;
use App\Factory\Pizza\Pizzas\NY\NYStyleClamPizza;
use App\Factory\Pizza\Pizzas\NY\NYStylePepperoniPizza;
use App\Factory\Pizza\Pizzas\NY\NYStyleVeggiePizza;
use App\Factory\Pizza\Pizzas\Pizza;
use App\Factory\Pizza\PizzaStore;

class NYPizzaStore extends PizzaStore
{

    public function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'cheese':
                return new NYStyleCheesePizza();
            case 'clam':
                return new NYStyleClamPizza();
            case 'veggie':
                return new NYStyleVeggiePizza();
            case 'pepperoni':
                return new NYStylePepperoniPizza();
        }
    }
}