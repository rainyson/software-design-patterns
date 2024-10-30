<?php

namespace App\Mediator\DialogBoxObserver;

abstract class UIControl
{
    private array $eventHandlers = [];
    public function addEventHandlers(IObserver $eventHandler): void {
        $this->eventHandlers[] = $eventHandler;
    }

    public function removeHandler(IObserver $eventHandler): void
    {
        if ($key = array_search($eventHandler, $this->eventHandlers)) {
            unset($this->eventHandlers[$key]);
        }
    }

    protected function notify(): void
    {
        foreach ($this->eventHandlers as $eventHandler) {
            $eventHandler->handle();
        }
    }
}