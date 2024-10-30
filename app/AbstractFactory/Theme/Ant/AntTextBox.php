<?php

namespace App\AbstractFactory\Theme\Ant;

use App\AbstractFactory\Theme\ITextBox;

class AntTextBox implements ITextBox
{

    public function render(): void
    {
        echo "Render Ant Text box";
    }
}