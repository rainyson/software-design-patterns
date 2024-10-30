<?php

namespace App\Facade\Notification;

class AuthToken
{
    private string $appId, $appKey;

    public function __construct(string $appId, string $appKey)
    {
        $this->appId = $appId;
        $this->appKey = $appKey;
    }
}