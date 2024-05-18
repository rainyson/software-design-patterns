<?php

namespace App\ChainOfResponsibility\DataReader;

use App\ChainOfResponsibility\DataReader\Reader;

class QBWReader extends Reader
{

    public function read(File $file): void
    {
        echo "Reading data from a QuickBooks spreadsheet.";
    }

    public function getExtension(): string
    {
        return ".qbw";
    }
}