<?php

namespace App\Proxy\EBook;

class Library
{
    private array $ebooks;

    public function add(IEbook $ebook): void
    {
        $this->ebooks[$ebook->getFilename()] = $ebook;
    }

    public function openEbook(string $filename): void
    {
        $this->ebooks[$filename]->show();
    }

    public function getEbooks(): array
    {
        return $this->ebooks;
    }
}