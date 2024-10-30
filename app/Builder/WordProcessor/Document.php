<?php

namespace App\Builder\WordProcessor;

class Document
{
    private array $elements;

    public function addElement(Element $element): void
    {
        $this->elements[] = $element;
    }

    public function export(ExportFormat $exportFormat)
    {

    }
}