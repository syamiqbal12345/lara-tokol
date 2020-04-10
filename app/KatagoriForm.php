<?php

namespace App;

use Kris\LaravelFormBuilder\Form;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class KatagoriForm extends Form
{
    public function buildForm()
    {
        $this
            ->add("nama")
            ->add("keterangan")

            ->add('Simpan', 'submit')
        ;
    }
}
