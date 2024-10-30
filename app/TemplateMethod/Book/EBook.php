<?php

namespace App\TemplateMethod\Book;

class EBook extends Book
{
    public function print()
    {
        return "The PDF file was generated with title: '{$this->title}'";
    }
}