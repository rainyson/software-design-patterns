<?php

namespace App\Adapter\Printer;

class PrintAdapter implements IPrinter
{
    protected $legacyPrinter;
    public function __construct(LegacyPrinter $legacyPrinter)
    {
        $this->legacyPrinter = $legacyPrinter;
    }

    public function printDocument()
    {
        return $this->legacyPrinter->printDocument() . ' With Adapter';
    }
}