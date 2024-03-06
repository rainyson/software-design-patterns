<?php

namespace App\Builder\Draw;

class Presentation
{
    private array $slides;

    public function addSlides(Slide $slide)
    {
        $this->slides[] = $slide;
    }

    public function export(PresentationFormat $format)
    {
        if ($format === PresentationFormat::PDF) {
            $pdf = new PdfDocument();
            foreach ($this->slides as $slide) {
                $pdf->addPage($slide->getText());
            }
        } else if ($format === PresentationFormat::MOVIE) {
            $movie = new Movie();
            foreach ($this->slides as $slide) {
                $movie->addFrame($slide->getText(), 3);
            }
        }
    }
}