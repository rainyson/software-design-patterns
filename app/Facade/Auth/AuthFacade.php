<?php

namespace App\Facade\Auth;

class AuthFacade
{
    private $auth, $user, $mail, $validate;

    public function __construct()
    {
        $this->auth = new Auth();
        $this->user = new User();
        $this->mail = new Mail();
        $this->validate = new Validate();
    }

    public function signUp($data)
    {
        if ($this->validate->isValid($data)){
            $this->user->create($data);
            $this->auth->login($data['email'],$data['password']);
            $this->mail->to($data['email'])->subject('welcome')->send();
        }
    }

    public function login($email,$password)
    {
        $this->auth->login($email, $password);
    }
}