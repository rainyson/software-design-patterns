<?php
namespace App\Observer\DefaultExample;

interface IObservable {

    public function register(IObserver $observer);

    public function unregister(IObserver $observer);

    public function notify();
}
