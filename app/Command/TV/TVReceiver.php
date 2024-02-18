<?php

namespace App\Command\TV;

class TVReceiver implements IMultimediaDevice
{
    private $state = 'TV ';

    public function turnOn()
    {
        $this->state .= 'is turned on';
    }

    public function turnOff()
    {
        $this->state .= 'is turned off';
    }

    public function volumeDown()
    {
        $this->state .= 'is volumed down -1';
    }

    public function volumeUp()
    {
        $this->state .= 'is volumed up +1';
    }
}