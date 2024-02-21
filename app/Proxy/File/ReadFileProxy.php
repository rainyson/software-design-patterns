<?php

namespace App\Proxy\File;

class ReadFileProxy extends ReadFileAbstract
{
    private $file;
    public function __construct($filename)
    {
        $this->setFilename($filename);
    }

    public function getContents()
    {
        if (!$this->file){
            $this->file = new ReadFile($this->getFilename());
        }
        return $this->file->getContents();
    }
}