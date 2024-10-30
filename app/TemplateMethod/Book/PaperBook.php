<?php

namespace App\TemplateMethod\Book;

class PaperBook extends Book
{
    public function print()
    {
        return "This book was printed with title: '{$this->title}'";
    }
}