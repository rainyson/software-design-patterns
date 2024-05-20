<?php

namespace App\Decorator\CloudStorage;

interface ICloudStream
{
    public function write(string $data): void;
}