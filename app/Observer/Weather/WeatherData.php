<?php

namespace App\Observer\Weather;

class WeatherData implements IWeatherSubject
{
    private float $humidity, $pressure, $temp;
    private array $observers;

    public function __construct()
    {
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }

    public function getPressure(): float
    {
        return $this->pressure;
    }

    public function getTemperature(): float
    {
        return $this->temp;
    }

    public function measurementsChanged(): void
    {
        $this->temp = $this->getTemperature();
        $this->pressure = $this->getPressure();
        $this->humidity = $this->getHumidity();
        $this->notifyObserver();
    }

    public function registerObserver(IWeatherObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(IWeatherObserver $observer): void
    {
        $this->observers = array_filter($this->observers, function ($savedObserver) use ($observer) {
            return $savedObserver !== $observer;
        });
    }

    public function notifyObserver(): void
    {
        foreach($this->observers as $observer) {
            $observer->update($this->humidity, $this->temp, $this->pressure);
        }
    }

    public function setHumidity(float $humidity): void
    {
        $this->humidity = $humidity;
    }

    public function setPressure(float $pressure): void
    {
        $this->pressure = $pressure;
    }

    public function getTemp(): float
    {
        return $this->temp;
    }
}