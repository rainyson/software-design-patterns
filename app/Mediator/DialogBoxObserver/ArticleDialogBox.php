<?php

namespace App\Mediator\DialogBoxObserver;

class ArticleDialogBox
{
    private ListBox $listBox;
    private TextBox $textBox;
    private Button $button;
    public function __construct()
    {
        $this->listBox = new ListBox();
        $this->button = new Button();
        $this->textBox = new TextBox();
    }

    public function setArticleSelected(): void
    {
        $this->textBox->setTextValue($this->listBox->getSelection());
        $this->button->setIsEnabled(true);
    }

    public function changeArticleTitle(): void
    {
        $content = $this->textBox->getTextValue();
        $this->button->setIsEnabled(!empty($content));
    }
}