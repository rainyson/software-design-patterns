<?php

namespace App\NullObject\Request;

class Client
{
    public function getRequest($command)
    {
        switch ($command){
            case 'A':
                return new RequestA();
            case 'B':
                return new RequestB();
            case 'C':
                return new RequestC();
            default:
                return new NullRequest();
        }
    }
}