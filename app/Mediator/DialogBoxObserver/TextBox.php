<?php

namespace App\Mediator\DialogBoxObserver;

class TextBox extends UIControl
{
    private string $textValue;

    public function getTextValue(): string
    {
        return $this->textValue;
    }

    public function setTextValue(string $textValue): void
    {
        $this->textValue = $textValue;
        $this->notify();
    }
}