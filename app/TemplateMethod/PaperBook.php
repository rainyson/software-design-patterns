<?php

namespace App\TemplateMethod;

class PaperBook extends Book
{
    public function print()
    {
        return "This book was printed with title: '{$this->title}'";
    }
}