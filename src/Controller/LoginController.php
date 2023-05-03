<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/Login', name: 'app_login')]
    public function index(): Response
    {
        return $this->render('front/login.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}