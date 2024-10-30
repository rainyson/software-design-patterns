<?php

namespace App\Facade\Notification;

class Message
{
    private string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }
}