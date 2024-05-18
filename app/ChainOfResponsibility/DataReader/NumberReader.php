<?php

namespace App\ChainOfResponsibility\DataReader;

use App\ChainOfResponsibility\DataReader\Reader;

class NumberReader extends Reader
{

    public function read(File $file): void
    {
        echo "Reading data from a Numbers spreadsheet.";
    }

    public function getExtension(): string
    {
        return ".numbers";
    }
}