<?php

namespace App\ChainOfResponsibility\HttpRequest;

class Compressor extends Handler
{
    public function handle(HttpRequest $httpRequest): bool
    {
        echo "Compress <br/>";
        return true;
    }
}