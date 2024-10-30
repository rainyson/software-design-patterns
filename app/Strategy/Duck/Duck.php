<?php

namespace App\Strategy\Duck;

class Duck
{
    public QuackBehavior $quackBehavior;
    public FlyBehavior $flyBehavior;

    public function swim()
    {

    }

    public function display()
    {

    }

    public function performFly(): void
    {
        $this->flyBehavior->fly();
    }

    public function performQuack(): void
    {
        $this->quackBehavior->quack();
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }
}