<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Contoller1Controller extends AbstractController
{
    #[Route('/contoller1', name: 'app_contoller1')]
    public function index(): Response
    {   die("Je suis la requête /controller1");
        return $this->render('contoller1/index.html.twig', [
            'controller_name' => 'Contoller1Controller',
        ]);
    }
}
