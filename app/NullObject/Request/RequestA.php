<?php

namespace App\NullObject\Request;

class RequestA implements IRequest
{

    public function execute()
    {
       return '<h1>Hello From Request A</h1>';
    }
}