<?php

namespace App\Observer\Weather;

class CurrentConditionDisplay implements IWeatherObserver, IWeatherDisplay
{
    private IWeatherSubject $weatherSubject;

    public function __construct(IWeatherSubject $weatherSubject)
    {
        $this->weatherSubject = $weatherSubject;
    }

    public function update(float $humidity, float $temperature, float $pressure)
    {

    }

    public function display(): void
    {

    }
}