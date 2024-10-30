<?php

namespace App\Observer\Weather;

interface IWeatherObserver
{
    public function update(float $humidity, float $temperature, float $pressure);
}