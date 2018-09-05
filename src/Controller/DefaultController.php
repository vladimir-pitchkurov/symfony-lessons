<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{

    public function index()
    {
        return new Response('<h1>Hello!</h1>');
    }

    /**
     * @Route("/hello/{name}")
     */
    public function hello($name)
    {
        return new Response('<h1>Hello ' . $name . '!</h1>');

    }
}