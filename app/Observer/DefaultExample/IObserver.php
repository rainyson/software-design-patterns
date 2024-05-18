<?php
namespace App\Observer\DefaultExample;

interface IObserver {
    public function update(IObservable $observable);
}
