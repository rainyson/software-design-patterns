<?php

namespace App\Facade\Notification;

class Connection
{
    private string $ipAddr;
    public function __construct(string $ipAddress)
    {
        $this->ipAddr = $ipAddress;
    }

    public function disconnect()
    {

    }
}