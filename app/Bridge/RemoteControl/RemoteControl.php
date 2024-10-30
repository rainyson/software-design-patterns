<?php

namespace App\Bridge\RemoteControl;

class RemoteControl
{
    protected $device;
    
    public function __construct(IDevice $device)
    {
        $this->device = $device;
    }

    public function togglePower()
    {
        if ($this->device->isEnabled()){
            $this->device->disable();
        }
        else {
            $this->device->enable();
        }
    }

    public function volumeDown()
    {
        return $this->device->setVolume($this->device->getVolume() + 10);
    }

    public function volumeUp()
    {
        return $this->device->setVolume($this->device->getVolume() - 10);
    }

    public function channelUp()
    {
        return $this->device->setChannel($this->device->getChannel() + 1);
    }

    public function channelDown()
    {
        return $this->device->setChannel($this->device->getChannel() - 1);
    }
}