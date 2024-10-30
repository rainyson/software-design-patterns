<?php

namespace App\Strategy\Encryption;

interface IEncryptionAlgorithm
{
    public function encrypt(string $var): string;
}