<?php

namespace App\ChainOfResponsibility\DataReader;

use http\Exception\UnexpectedValueException;

abstract class Reader
{
    private Reader $next;

    public function setNext(Reader $next): void
    {
        $this->next = $next;
    }

    public function doRead(File $file): void
    {
        if (str_ends_with($file->getName(), $this->getExtension())) {
            $this->read($file);
            return;
        }
        $this->next !== null
            ? $this->next->doRead($file)
            : throw new UnexpectedValueException("File format not supported.");
    }

    public abstract function getExtension(): string;

    public abstract function read(File $file): void;
}