<?php

namespace App\Iterator\Browser;

class ListIterator implements IIterator
{
    private int $index;

    public function __construct(private BrowseHistory $browseHistory)
    {
        $this->index = 0;
    }

    public function current(): string
    {
        return $this->browseHistory->getUrls()[$this->index];
    }

    public function next(): void
    {
        $this->index++;
    }

    public function hasNext(): bool
    {
        return $this->index < count($this->browseHistory->getUrls());
    }
}