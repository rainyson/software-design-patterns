<?php

namespace App\ChainOfResponsibility\HttpRequest;

class WebServer
{
    public function __construct(private Handler $handler)
    {
    }

    public function handle(HttpRequest $httpRequest): void
    {
        $this->handler->doHandle($httpRequest);
    }
}