<?php

namespace App\Facade\Notification;

class NotificationService
{
    public function send(string $message, string $target): void
    {
        $server = new NotificationServer();
        $connection = $server->connect('127.0.0.1');
        $authentication = $server->authenticate('testApp', '123456');
        $server->send($authentication, new Message($message), $target);
        $connection->disconnect();
    }
}