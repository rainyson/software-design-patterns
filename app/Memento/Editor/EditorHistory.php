<?php

namespace App\Memento\Editor;

class EditorHistory
{
    private $states = [];
    public function push(EditorState $state)
    {
        $this->states[] = $state;
    }

    public function pop()
    {
        $lastIndex = count($this->states) - 1;
        $lastState = $this->states[$lastIndex];
        unset($this->states[$lastIndex]);
        return $lastState;
    }
}