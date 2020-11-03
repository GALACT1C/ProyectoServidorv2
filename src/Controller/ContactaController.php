<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactaController extends AbstractController
{
    /**
     * @Route("/contacta", name="contacta")
     */
    public function index(): Response
    {
        return $this->render('/contacta.html.twig', [
            'controller_name' => 'ContactaController',
        ]);
    }
}
