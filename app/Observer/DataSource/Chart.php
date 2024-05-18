<?php

namespace App\Observer\DataSource;

class Chart implements IObserver
{
    private DataSource $dataSource;
    public function __construct(DataSource $dataSource)
    {
        $this->dataSource = $dataSource;
    }

    public function update(): void
    {
        echo "Chart got updated: {$this->dataSource->getValue()}";
    }
}