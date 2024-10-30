<?php

namespace App\Factory\Pizza\Pizzas;

interface Pizza
{
    public function prepare();

    public function bake();

    public function cut();

    public function box();
}