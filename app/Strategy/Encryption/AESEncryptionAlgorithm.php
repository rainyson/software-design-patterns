<?php

namespace App\Strategy\Encryption;

class AESEncryptionAlgorithm implements IEncryptionAlgorithm
{

    public function encrypt(string $var): string
    {
        return "Encrypting message using AES";
    }
}