<?php

namespace App\AbstractFactory\Theme\MaterialDesign;

use App\AbstractFactory\Theme\ITextBox;

class MaterialTextBox implements ITextBox
{

    public function render(): void
    {
        echo "Render Material TextBox";
    }
}