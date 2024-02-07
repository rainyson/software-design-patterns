<?php
namespace App\Observer;

interface IObservable {

    public function register(IObserver $observer);

    public function unregister(IObserver $observer);

    public function notify();
}
