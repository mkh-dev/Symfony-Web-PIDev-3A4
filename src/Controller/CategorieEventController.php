<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieEventController extends AbstractController
{
    #[Route('/categorie/event', name: 'app_categorie_event')]
    public function index(): Response
    {
        return $this->render('categorie_event/index.html.twig', [
            'controller_name' => 'CategorieEventController',
        ]);
    }
}
