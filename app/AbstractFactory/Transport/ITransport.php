<?php namespace App\AbstractFactory\Transport;

interface ITransport {
    public function deliver($place);
}