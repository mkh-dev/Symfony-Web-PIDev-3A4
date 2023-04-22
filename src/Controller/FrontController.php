<?php

namespace App\Controller;


use App\Entity\Produit;
use App\Form\ProduitType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class FrontController extends AbstractController
{
    #[Route('/', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    #[Route('/produit_front', name: 'produit_front')]
    public function produit(EntityManagerInterface $entityManager): Response
    {
        // Récupération de la liste des produits depuis la base de données
        $produits = $entityManager->getRepository(Produit::class)->findAll();

        // Transmission de la liste des produits à la vue
        return $this->render('front/produit.html.twig', [
            'produits' => $produits,
        ]);
    }


}
