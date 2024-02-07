<?php
namespace App\Observer;

interface IObserver {
    public function update(IObservable $observable);
}
