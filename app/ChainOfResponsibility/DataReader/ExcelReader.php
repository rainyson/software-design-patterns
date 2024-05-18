<?php

namespace App\ChainOfResponsibility\DataReader;

use App\ChainOfResponsibility\DataReader\Reader;

class ExcelReader extends Reader
{

    public function read(File $file): void
    {
        echo "Reading data from an Excel spreadsheet.";
    }

    public function getExtension(): string
    {
        return ".xls";
    }
}