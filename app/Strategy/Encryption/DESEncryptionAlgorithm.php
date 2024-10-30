<?php

namespace App\Strategy\Encryption;

class DESEncryptionAlgorithm implements IEncryptionAlgorithm
{

    public function encrypt(string $var): string
    {
        return "Encrypting message using DES";
    }
}