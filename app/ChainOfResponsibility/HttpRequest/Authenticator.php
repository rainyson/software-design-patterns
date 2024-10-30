<?php

namespace App\ChainOfResponsibility\HttpRequest;

class Authenticator extends Handler
{
    public function handle(HttpRequest $httpRequest): bool
    {
        $isValid = ($httpRequest->getUsername() === "admin" &&
            $httpRequest->getPassword() === "1234");
        echo "Authentication<br />";
        return $isValid;
    }
}