<?php

namespace App\Bridge\RemoteControl;

class AdvancedRemote extends RemoteControl
{
    public function mute()
    {
        $this->device->setVolume(0);
    }
}