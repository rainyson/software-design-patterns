<?php

namespace App\Composite\Incident;

class HumanResource implements IComponent
{

    public function deploy(): void
    {
        echo "Human Resource Deployed <br />";
    }
}