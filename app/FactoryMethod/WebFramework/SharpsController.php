<?php

namespace App\FactoryMethod\WebFramework;

use App\FactoryMethod\WebFramework\Mocha\Controller;
use App\FactoryMethod\WebFramework\Mocha\IViewEngine;
use App\FactoryMethod\WebFramework\Sharp\SharpViewEngine;

class SharpsController extends Controller
{
    public function createEngine(): IViewEngine
    {
        return new SharpViewEngine();
    }
}