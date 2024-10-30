<?php

namespace App\Strategy\Encryption;

class ChatClient
{
    public function __construct(private IEncryptionAlgorithm $encryptionAlgorithm)
    {
    }

    public function send(string $message): void
    {
        $this->encryptionAlgorithm->encrypt($message);
        echo "Sending the encrypted message ...";
    }
}