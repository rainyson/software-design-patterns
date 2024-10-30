<?php

namespace App\ChainOfResponsibility\HttpRequest;

abstract class Handler
{
    private Handler|null $next;

    public function __construct(Handler|null $next)
    {
        $this->next = $next;
    }

    public function doHandle(HttpRequest $httpRequest): void
    {
        if (!$this->handle($httpRequest)) {
            return;
        }
        $this->next?->doHandle($httpRequest);
    }

    abstract public function handle(HttpRequest $httpRequest);
}