<?php

namespace App\Builder\Draw;

class MovieBuilder implements IPresentationBuilder
{
    private Movie $movie;

    /**
     *
     */
    public function __construct()
    {
        $this->movie = new Movie();
    }


    public function addSlide(Slide $slide): void
    {
        $this->movie->addFrame($slide->getText(), 3);
    }

    public function getOutput(): Movie
    {
        return $this->movie;
    }
}