<?php

namespace App\FactoryMethod\Transport;

class TransportSeaFactory extends LogisticFactory
{
    public function createTransport()
    {
        return new Ship();
    }
}