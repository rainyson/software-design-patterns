<?php

namespace App\FactoryMethod\WebFramework\Sharp;

use App\FactoryMethod\WebFramework\Mocha\IViewEngine;

class SharpViewEngine implements IViewEngine
{

    public function render(string $viewName, array $data): string
    {
        return "View rendered by Sharp";
    }
}