<?php

namespace App\Memento\Editor;

class Editor
{
    private $content;

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function restore(EditorState $state)
    {
        $this->setContent($state->getContent());
    }

    public function createState()
    {
        return new EditorState($this->content);
    }
}