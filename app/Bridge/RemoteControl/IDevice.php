<?php namespace App\Bridge\RemoteControl;

interface IDevice
{
    public function isEnabled();
    public function enable();
    public function disable();
    public function getVolume();
    public function setVolume();
    public function getChannel();
    public function setChannel();
}
