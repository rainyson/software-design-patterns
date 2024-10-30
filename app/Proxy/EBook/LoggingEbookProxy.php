<?php

namespace App\Proxy\EBook;

use App\Proxy\EBook\IEbook;

class LoggingEbookProxy implements IEbook
{
    private string $filename;
    private EBook $ebook;

    /**
     * @param string $filename
     */
    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function show(): void
    {
        if (empty($this->ebook)) {
            $this->ebook = new EBook($this->filename);
        }
        echo "Logging <br />";
        $this->ebook->show();
    }

    public function getFilename(): string|null
    {
        return $this->filename;
    }
}