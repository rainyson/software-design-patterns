<?php

namespace App\Facade\Auth;

class Mail
{
    public function to($address)
    {
        return $this;
    }

    public function subject($subject)
    {
        return $this;
    }

    public function send()
    {
        return true;
    }
}