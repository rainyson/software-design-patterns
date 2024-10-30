<?php

namespace App\Observer\Weather;

interface IWeatherSubject
{
    public function registerObserver(IWeatherObserver $observer): void;

    public function removeObserver(IWeatherObserver $observer): void;

    public function notifyObserver(): void;
}