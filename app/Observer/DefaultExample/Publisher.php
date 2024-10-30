<?php

namespace App\Observer\DefaultExample;

class Publisher implements IObservable
{
    protected $event;

    protected $observers = [];

    /**
     * @return mixed
     */
    public function register(IObserver $observer)
    {
        $observerKey = spl_object_hash($observer);
        $this->observers[$observerKey] = $observer;
    }

    /**
     * @return mixed
     */
    public function unregister(IObserver $observer)
    {
        $observerKey = spl_object_hash($observer);
        unset($this->observers[$observerKey]);
    }

    /**
     * @return mixed
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setEvent($event)
    {
        $this->event = $event;
        $this->notify();
    }

    public function getEvent()
    {
        return $this->event;
    }

    public function getObservers()
    {
        return $this->observers;
    }
}