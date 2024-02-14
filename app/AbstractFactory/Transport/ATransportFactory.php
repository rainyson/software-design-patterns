<?php

namespace App\AbstractFactory\Transport;

abstract class ATransportFactory
{
    abstract public function createRoadTransport();
    abstract public function createSeaTransport();
}