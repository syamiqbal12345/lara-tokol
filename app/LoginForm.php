<?php

namespace App;

use Kris\LaravelFormBuilder\Form;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class LoginForm extends Form
{
    public function buildForm()
    {
        $this
        ->add("username", 'text')
        ->add("password", 'password')
        ->add("Login", "submit")
    ;
    }
}
