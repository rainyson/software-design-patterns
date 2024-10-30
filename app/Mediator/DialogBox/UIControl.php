<?php

namespace App\Mediator\DialogBox;

class UIControl
{
    protected DialogBox $owner;
    public function __construct(DialogBox $dialogBox)
    {
        $this->owner = $dialogBox;
    }
}