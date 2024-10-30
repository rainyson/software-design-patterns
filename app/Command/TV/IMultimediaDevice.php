<?php namespace App\Command\TV;

interface IMultimediaDevice
{
    public function turnOn();

    public function turnOff();

    public function volumeDown();

    public function volumeUp();
}
