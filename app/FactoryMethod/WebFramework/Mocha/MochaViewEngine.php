<?php

namespace App\FactoryMethod\WebFramework\Mocha;

class MochaViewEngine implements IViewEngine
{
    public function render(string $viewName, array $data): string
    {
        return "View Rendered By Mocha";
    }
}