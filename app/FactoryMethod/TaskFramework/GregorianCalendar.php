<?php

namespace App\FactoryMethod\TaskFramework;

class GregorianCalendar implements ICalendar
{

    public function addEvent(Event $event, \DateTime $dateTime): void
    {
        echo "Adding an event on the given date in Gregorian calendar.";
    }
}