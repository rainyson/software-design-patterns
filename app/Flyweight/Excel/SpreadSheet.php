<?php

namespace App\Flyweight\Excel;

class SpreadSheet
{
    private Cell $cell;

    /**
     * @param Cell $cell
     */
    public function __construct(Cell $cell)
    {
        $this->cell = $cell;
    }

    public function make()
    {

    }
}