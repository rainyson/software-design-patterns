<?php

namespace App\NullObject\Request;

class RequestB implements IRequest
{

    public function execute()
    {
        return '<h1>Hello From Request B</h1>';
    }
}