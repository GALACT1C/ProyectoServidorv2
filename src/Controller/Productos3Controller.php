<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Productos3Controller extends AbstractController
{
    /**
     * @Route("/productos3", name="productos3")
     */
    public function index(): Response
    {
        return $this->render('/productos3.html.twig', [
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
