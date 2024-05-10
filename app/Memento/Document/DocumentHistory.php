<?php

namespace App\Memento\Document;

class DocumentHistory
{
    private array $states = [];

    public function push(DocumentState $state): void
    {
        $this->states[] = $state;
    }

    public function pop(): DocumentState
    {
        $lastIndex = count($this->states) - 1;
        $lastState = $this->states[$lastIndex];
        unset($this->states[$lastIndex]);
        return $lastState;
    }
}