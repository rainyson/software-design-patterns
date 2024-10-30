<?php

namespace App\Proxy\EBook;

interface IEbook
{
    public function show(): void;
    public function getFilename(): string|null;
}