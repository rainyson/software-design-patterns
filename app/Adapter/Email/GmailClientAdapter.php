<?php

namespace App\Adapter\Email;

use App\Adapter\Email\Gmail\GmailClient;

class GmailClientAdapter implements IEmailProvider
{
    private GmailClient $gmailClient;

    public function __construct(GmailClient $gmailClient)
    {
        $this->gmailClient = $gmailClient;
    }

    public function downloadEmails(): void
    {
        $this->gmailClient->connect();
        $this->gmailClient->getEmails();
        $this->gmailClient->disconnect();
    }
}