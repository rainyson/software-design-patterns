<?php

namespace App\Factory\Pizza\Stores;

use App\Factory\Pizza\Pizzas\Chicago\ChicagoStyleCheesePizza;
use App\Factory\Pizza\Pizzas\Chicago\ChicagoStyleClamPizza;
use App\Factory\Pizza\Pizzas\Chicago\ChicagoStylePepperoniPizza;
use App\Factory\Pizza\Pizzas\Chicago\ChicagoStyleVeggiePizza;
use App\Factory\Pizza\Pizzas\Pizza;
use App\Factory\Pizza\PizzaStore;

class ChicagoPizzaStore extends PizzaStore
{

    public function createPizza(string $type): Pizza
    {
        switch ($type){
            case 'cheese':
                return new ChicagoStyleCheesePizza();
            case 'clam':
                return new ChicagoStyleClamPizza();
            case 'veggie':
                return new ChicagoStyleVeggiePizza();
            case 'pepperoni':
                return new ChicagoStylePepperoniPizza();
        }
    }
}