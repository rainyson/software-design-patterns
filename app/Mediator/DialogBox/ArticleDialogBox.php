<?php

namespace App\Mediator\DialogBox;

class ArticleDialogBox extends DialogBox
{
    private ListBox $listBox;
    private TextBox $textBox;
    private Button $button;

    public function __construct()
    {
        $this->listBox = new ListBox($this);
        $this->textBox = new TextBox($this);
        $this->button = new Button($this);
    }

    public function simulateUserInteraction(): void
    {
        $this->listBox->setSelection('Article 1');
        $this->textBox->setTextValue('');
        $this->listBox->setSelection('Article 2');
        echo "TextBox: {$this->textBox->getTextValue()} <br />";
        echo "Button: {$this->button->isEnabled()} <br />";
    }

    public function changed(UIControl $control): void
    {
        if ($control instanceof $this->listBox) {
            $this->articleSelected();
        }
        elseif ($control instanceof $this->textBox) {
            $this->titleChanged();
        }
    }

    private function articleSelected(): void
    {
        $this->textBox->setTextValue($this->listBox->getSelection());
        $this->button->setIsEnabled(true);
    }

    private function titleChanged(): void
    {
        $content = $this->textBox->getTextValue();
        $this->button->setIsEnabled(!empty($content));
    }
}