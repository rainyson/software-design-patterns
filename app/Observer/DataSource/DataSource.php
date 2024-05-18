<?php

namespace App\Observer\DataSource;

class DataSource extends Subject
{
    private int $value;

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value): void
    {
        $this->value = $value;
        $this->notify();
    }
}