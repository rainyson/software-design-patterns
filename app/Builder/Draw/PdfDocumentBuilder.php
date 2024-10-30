<?php

namespace App\Builder\Draw;

class PdfDocumentBuilder implements IPresentationBuilder
{
    private PdfDocument $pdfDocument;

    public function __construct()
    {
        $this->pdfDocument = new PdfDocument();
    }

    public function addSlide(Slide $slide): void
    {
        $this->pdfDocument->addPage($slide->getText());
    }

    public function getOutput(): PdfDocument
    {
        return $this->pdfDocument;
    }
}