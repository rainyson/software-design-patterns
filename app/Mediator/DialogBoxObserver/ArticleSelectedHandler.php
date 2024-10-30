<?php

namespace App\Mediator\DialogBoxObserver;

class ArticleSelectedHandler extends ArticleDialogBox implements IObserver
{
    public function handle(): void
    {
       $this->setArticleSelected();
    }
}