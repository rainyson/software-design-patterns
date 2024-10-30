<?php

namespace App\Iterator\Browser;

class BrowseHistory
{
    private array $urls = [];

    public function push(string $url)
    {
        $this->urls[] = $url;
    }

    public function pop()
    {
        return array_pop($this->urls);
    }

    public function getUrls(): array
    {
        return $this->urls;
    }

    /**
     * @return IIterator
     */
    public function createIterator(): IIterator
    {
        return new ListIterator($this);
    }
}