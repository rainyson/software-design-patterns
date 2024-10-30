<?php

namespace App\Builder\Draw;

class PdfDocument
{
    public function addPage(string $text): void
    {
        echo "Adding a Page to PDF with text: {$text} <br />";
    }
}