<?php

namespace App\Decorator\CloudStorage;

class CompressedCloudStream implements ICloudStream
{
    private ICloudStream $cloudStream;

    public function __construct(ICloudStream $cloudStream)
    {
        $this->cloudStream = $cloudStream;
    }

    public function write(string $data): void
    {
       $this->cloudStream->write($this->compress($data));
    }

    private function compress(string $data): string
    {
        return substr($data, 0, 5);
    }
}