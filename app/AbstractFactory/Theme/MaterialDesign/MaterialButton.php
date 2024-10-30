<?php

namespace App\AbstractFactory\Theme\MaterialDesign;

use App\AbstractFactory\Theme\IButton;

class MaterialButton implements IButton
{

    public function render(): void
    {
        echo "Render Material Button";
    }
}