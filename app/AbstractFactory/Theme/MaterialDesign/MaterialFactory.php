<?php

namespace App\AbstractFactory\Theme\MaterialDesign;

use App\AbstractFactory\Theme\IButton;
use App\AbstractFactory\Theme\ITextBox;
use App\AbstractFactory\Theme\IWidgetFactory;

class MaterialFactory implements IWidgetFactory
{

    public function createButton(): IButton
    {
        return new MaterialButton();
    }

    public function createTextBox(): ITextBox
    {
        return new MaterialTextBox();
    }
}