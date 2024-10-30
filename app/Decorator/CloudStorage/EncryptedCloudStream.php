<?php

namespace App\Decorator\CloudStorage;

class EncryptedCloudStream implements ICloudStream
{
    private ICloudStream $cloudStream;

    public function __construct(ICloudStream $cloudStream)
    {
        $this->cloudStream = $cloudStream;
    }
    public function write(string $data): void
    {
        $this->cloudStream->write($this->encrypt($data));
    }

    private function encrypt(string $data): string
    {
        return md5($data);
    }
}