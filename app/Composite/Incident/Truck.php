<?php

namespace App\Composite\Incident;

class Truck implements IComponent
{

    public function deploy(): void
    {
        echo "Truck Deployed <br />";
    }
}