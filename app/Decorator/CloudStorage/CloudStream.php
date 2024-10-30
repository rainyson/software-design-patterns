<?php

namespace App\Decorator\CloudStorage;

class CloudStream implements ICloudStream
{
    public function write(string $data): void
    {
        echo "Storing {$data}";
    }
}