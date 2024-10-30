<?php

namespace App\Factory\Pizza\Stores;

use App\Factory\Pizza\Pizzas\California\CaliforniaStyleCheesePizza;
use App\Factory\Pizza\Pizzas\California\CaliforniaStyleClamPizza;
use App\Factory\Pizza\Pizzas\California\CaliforniaStylePepperoniPizza;
use App\Factory\Pizza\Pizzas\California\CaliforniaStyleVeggiePizza;
use App\Factory\Pizza\Pizzas\Pizza;
use App\Factory\Pizza\PizzaStore;

class CaliforniaPizzaStore extends PizzaStore
{

    public function createPizza(string $type): Pizza
    {
        switch ($type){
            case 'cheese':
                return new CaliforniaStyleCheesePizza();
            case 'clam':
                return new CaliforniaStyleClamPizza();
            case 'veggie':
                return new CaliforniaStyleVeggiePizza();
            case 'pepperoni':
                return new CaliforniaStylePepperoniPizza();
        }
    }
}