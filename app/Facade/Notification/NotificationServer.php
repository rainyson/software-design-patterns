<?php

namespace App\Facade\Notification;

class NotificationServer
{
    public function connect(string $ipaddr): Connection
    {
        return new Connection($ipaddr);
    }

    public function authenticate(string $appId, string $appKey): AuthToken
    {
        return new AuthToken($appId, $appKey);
    }

    public function send(AuthToken $authToken, Message $message, string $target): void
    {
        echo "Sending a message";
    }
}