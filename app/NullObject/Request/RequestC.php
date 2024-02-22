<?php

namespace App\NullObject\Request;

class RequestC implements IRequest
{

    public function execute()
    {
        return '<h1>Hello From Request C</h1>';
    }
}