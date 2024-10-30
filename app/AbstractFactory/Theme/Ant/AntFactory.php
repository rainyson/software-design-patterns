<?php

namespace App\AbstractFactory\Theme\Ant;

use App\AbstractFactory\Theme\IButton;
use App\AbstractFactory\Theme\ITextBox;
use App\AbstractFactory\Theme\IWidgetFactory;

class AntFactory implements IWidgetFactory
{

    public function createButton(): IButton
    {
        return new AntButton();
    }

    public function createTextBox(): ITextBox
    {
        return new AntTextBox();
    }
}