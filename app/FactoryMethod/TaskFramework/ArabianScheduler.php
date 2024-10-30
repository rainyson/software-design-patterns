<?php

namespace App\FactoryMethod\TaskFramework;

class ArabianScheduler extends Scheduler
{
    public function createCalendar(): ICalendar
    {
        return new ArabianCalendar();
    }
}