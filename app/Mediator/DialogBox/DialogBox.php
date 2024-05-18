<?php

namespace App\Mediator\DialogBox;

abstract class DialogBox
{
    public abstract function changed(UIControl $control);
}