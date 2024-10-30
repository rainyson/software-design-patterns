<?php

namespace App\FactoryMethod\WebFramework\Mocha;

interface IViewEngine
{
    public function render(string $viewName, array $data): string;
}