<?php

namespace App\Mediator\DialogBoxObserver;

class Button extends UIControl
{
    private bool $isEnabled;

    public function isEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(bool $isEnabled): void
    {
        $this->isEnabled = $isEnabled;
        $this->notify();
    }
}