<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PtController extends AbstractController
{
    /**
     * @Route("/pt", name="pt")
     */
    public function index(): Response
    {
        return $this->render('pt/index.html.twig', [
            'controller_name' => 'PtController',
        ]);
    }
}
