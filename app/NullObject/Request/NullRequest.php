<?php

namespace App\NullObject\Request;

class NullRequest implements IRequest
{
    public function execute()
    {
        return '<h1>Hello From Null Request</h1>';
    }
}