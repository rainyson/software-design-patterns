<?php

namespace App\FactoryMethod\WebFramework\Mocha;

class Controller
{
    protected function render(string $viewName, array $data): void
    {
        $engine = $this->createEngine();
        echo $engine->render($viewName, $data);
    }

    protected function createEngine(): IViewEngine
    {
        return new MochaViewEngine();
    }
}