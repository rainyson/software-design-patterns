<?php

namespace App\AbstractFactory\Theme\Ant;

use App\AbstractFactory\Theme\IButton;

class AntButton implements IButton
{

    public function render(): void
    {
        echo "Render Ant Button";
    }
}