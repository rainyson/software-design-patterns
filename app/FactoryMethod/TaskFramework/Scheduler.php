<?php

namespace App\FactoryMethod\TaskFramework;

class Scheduler
{
    private ICalendar $calendar;

    public function __construct()
    {
        $this->calendar = $this->createCalendar();
    }

    public function schedule(Event $event): void
    {
        $today = new \DateTime();
        $this->calendar->addEvent($event, $today);
    }

    protected function createCalendar(): ICalendar
    {
        return new GregorianCalendar();
    }
}