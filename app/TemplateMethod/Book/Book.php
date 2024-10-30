<?php

namespace App\TemplateMethod\Book;

abstract class Book
{
    protected $title, $contents;

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $contents
     */
    public function setContents($contents)
    {
        $this->contents = $contents;
    }

    abstract public function print();
}