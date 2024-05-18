<?php

namespace App\Mediator\DialogBox;

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
        $this->owner->changed($this);
    }

}