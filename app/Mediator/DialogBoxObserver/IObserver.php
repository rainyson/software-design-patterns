<?php

namespace App\Mediator\DialogBoxObserver;

interface IObserver
{
    public function handle(): void;
}