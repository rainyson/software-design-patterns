<?php

namespace App\Mediator\DialogBoxObserver;

class ListBox extends UIControl
{
    private string $selection;

    public function getSelection(): string
    {
        return $this->selection;
    }

    public function setSelection(string $selection): void
    {
        $this->selection = $selection;
        $this->notify();
    }

}