<?php

namespace App\Builder\Draw;

class Movie
{
    public function addFrame(string $text, int $duration): void
    {
        echo "Adding a frame to Movie with text: {$text} and Duration: {$duration} <br />";
    }
}