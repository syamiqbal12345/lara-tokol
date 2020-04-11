<?php

namespace App;

use Kris\LaravelFormBuilder\Form;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class TokoForm extends Form
{
    public function buildForm()
    {
        $this
            ->add("nama")
            ->add("alamat")
            ->add("pemilik")
            ->add("telepon")
            ->add("email")
        ;

        $this->add("status", 'choice', [
            'choices' => [
                1 => 'Buka',
                0 => 'Tutup'
            ]
        ])

            ->add('Simpan', 'submit')
        ;
    }
}
