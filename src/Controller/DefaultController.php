<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{

//    public function index()
//    {
        //return new Response('<h1>Hello!</h1>');
//    }

    /**
     * @Route("/hello/{name}")
     */
    public function hello($name)
    {
        return $this->render('default/index.html.twig', [
            'name' => $name
        ]);

    }
}