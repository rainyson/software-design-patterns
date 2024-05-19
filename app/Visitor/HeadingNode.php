<?php

namespace App\Visitor;

class HeadingNode implements IHtmlNode
{

    public function highlight(): void
    {
        echo 'Highlight-heading';
    }
}