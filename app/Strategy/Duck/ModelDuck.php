<?php

namespace App\Strategy\Duck;

use App\Strategy\Duck\Duck;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new MuteQuack();
    }
}