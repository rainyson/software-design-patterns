<?php

namespace App\FactoryMethod\Transport;

class SeaLogistic extends LogisticFactory
{

    public function createTransport()
    {
        return new Ship();
    }
}