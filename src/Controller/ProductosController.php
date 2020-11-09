<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ProductosController extends AbstractController
{
    /**
     * @Route("/productos", name="productos")
     */
    public function index(SessionInterface $session)
    {
        $usuario = $session->get('usuario');
        return $this->render('/productos.html.twig', [
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
