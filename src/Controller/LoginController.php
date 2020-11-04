<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index(): Response
    {
        return $this->render('/login.html.twig', [
            'loginpage'=>$this->generateUrl('login'),
            'indexpage'=>$this->generateUrl('inicio'),
            'aboutpage'=>$this->generateUrl('nosotros'),
            'productpage'=>$this->generateUrl('productos'),
            'product2page'=>$this->generateUrl('productos2'),
            'product3page'=>$this->generateUrl('productos3'),
            'contactapage'=>$this->generateUrl('contacta'),
            'servicespage'=>$this->generateUrl('servicios'),
        ]);
    } 
}
