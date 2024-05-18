<?php

namespace App\Observer\DataSource;

class Spreadsheet implements IObserver
{
    private DataSource $dataSource;
    public function __construct(DataSource $dataSource)
    {
        $this->dataSource = $dataSource;
    }

    public function update(): void
    {
        echo "Spreadsheet got updated: {$this->dataSource->getValue()}";
    }
}