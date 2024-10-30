<?php

namespace App\Proxy\File;

abstract class ReadFileAbstract
{
    protected $filename, $contents;
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function getContents()
    {
        return $this->contents;
    }
}