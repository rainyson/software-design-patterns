<?php

namespace App\ChainOfResponsibility\DataReader;

class File
{
    public function __construct(private string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }
}