<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Productos2Controller extends AbstractController
{
    /**
     * @Route("/productos2", name="productos2")
     */
    public function index(SessionInterface $session)
    {
        $usuario = $session->get('usuario');
        return $this->render('/productos2.html.twig', [
            'loginpage'=>$this->generateUrl('login'),
            'indexpage'=>$this->generateUrl('inicio'),
            'aboutpage'=>$this->generateUrl('nosotros'),
            'productpage'=>$this->generateUrl('productos'),
            'product2page'=>$this->generateUrl('productos2'),
            'product3page'=>$this->generateUrl('productos3'),
            'contactapage'=>$this->generateUrl('contacta'),
            'servicespage'=>$this->generateUrl('servicios'),
            'usuario' => strlen($usuario)>0?''.$usuario:'',
        ]);
    }
}
