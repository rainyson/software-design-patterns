<?php

namespace App\Proxy\File;

class ReadFile extends ReadFileAbstract
{
    const DOCUMENT_PATH = __DIR__;

    public function __construct($filename)
    {
        $this->setFilename($filename);
        $this->contents = file_get_contents(self::DOCUMENT_PATH . '/' . $this->getFilename());
    }
}