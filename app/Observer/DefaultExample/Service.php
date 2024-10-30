<?php

namespace App\Observer\DefaultExample;

class Service implements IObserver
{
    protected string $name;
    protected int $priority;

    public function __construct($name, $priority = 0)
    {
        $this->name = $name;
        $this->priority = $priority;
    }

    /**
     * @param IObservable $observable
     * @return void
     */
    public function update(IObservable $observable): void
    {
        print_r("{$this->name} : {$observable->getEvent()} <br>");
    }
}