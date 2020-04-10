<?php

namespace App;

use Kris\LaravelFormBuilder\Form;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class UserForm extends Form
{
    public function buildForm()
    {
        $this
            ->add("username", 'text')
            ->add("password", 'password')

            ->add("lavel")
            ->add("nama")
            ->add("kelamin")
            ->add("alamat")
            ->add("e-mail")

            ->add('Simpan', 'submit')
        ;
    }
}
