<?php

namespace App\Builder\Draw;

class Presentation
{
    private array $slides;

    public function addSlides(Slide $slide): void
    {
        $this->slides[] = $slide;
    }

    public function export(IPresentationBuilder $presentationBuilder): void
    {
        $presentationBuilder->addSlide(new Slide('Copyright'));
        foreach ($this->slides as $slide) {
            $presentationBuilder->addSlide($slide);
        }
    }
}