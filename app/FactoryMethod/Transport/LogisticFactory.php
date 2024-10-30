<?php

namespace App\FactoryMethod\Transport;

abstract class LogisticFactory
{
    abstract public function createTransport();

    public function planDelivery($place)
    {
        $vehicle = $this->createTransport();
        $vehicle->deliver($place);
        return $vehicle;
    }
}