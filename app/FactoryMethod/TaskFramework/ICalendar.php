<?php

namespace App\FactoryMethod\TaskFramework;

interface ICalendar
{
    public function addEvent(Event $event, \DateTime $dateTime): void;
}