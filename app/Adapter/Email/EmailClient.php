<?php

namespace App\Adapter\Email;

class EmailClient
{
    private array $providers = [];

    public function addProvider(IEmailProvider $emailProvider): void
    {
        $this->providers[] = $emailProvider;
    }

    public function downloadEmails(): void
    {
        foreach ($this->providers as $provider) {
            $provider->downloadEmails();
        }
    }
}