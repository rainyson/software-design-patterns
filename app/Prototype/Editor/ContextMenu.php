<?php

namespace App\Prototype\Editor;

class ContextMenu
{
    private Timeline $timeline;

    /**
     * @param Timeline $timeline
     */
    public function __construct(Timeline $timeline)
    {
        $this->timeline = $timeline;
    }

    public function duplicate(IComponent $component): void
    {
        $duplicatedComponent = $component->clone();
        $this->timeline->add($duplicatedComponent);
        // add to timeline
    }
}