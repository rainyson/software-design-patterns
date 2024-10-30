<?php

namespace App\Observer\Stock;

class Subject
{
    private array $observers = [];

    public function addObserver(IObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(IObserver $observer): void
    {
        if ($key = array_search($observer, $this->observers)) {
            unset($this->observers[$key]);
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}