<?php

namespace App\ChainOfResponsibility\HttpRequest;

class Logger extends Handler
{
    public function handle(HttpRequest $httpRequest): bool
    {
        echo "Logging <br/>";
        return true;
    }
}