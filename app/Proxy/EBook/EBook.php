<?php

namespace App\Proxy\EBook;

class EBook implements IEbook
{
    private string $filename;

    /**
     * @param string $filename
     */
    public function __construct(string $filename)
    {
        $this->filename = $filename;
        $this->load();
    }

    public function load(): void
    {
        printf('Load Ebook named: %s <br />', $this->filename);
    }

    public function show(): void
    {
        printf('Showing Ebook named: %s <br />', $this->filename);
    }

    public function getFilename(): string
    {
        return $this->filename;
    }

}