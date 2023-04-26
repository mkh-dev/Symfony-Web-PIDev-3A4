<?php

namespace App\Controller;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

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

    #[Route('/home', name: 'login_home')]
    public function home(): Response
    {
        return $this->render('front/home.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    #[Route('/utilisateur', name: 'login_utilisateur')]
    public function utilisateur(): Response
    {
        return $this->render('front/utilisateur.html.twig', [
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

    
    #[Route('/produits/recherche', name: 'rechercherParNom', methods: ['GET'])]

    public function rechercherParNom(Request $request, ProduitRepository $produitRepository)
    {
        $term = $request->query->get('term');
        $produits = $produitRepository->rechercherParNom($term);
        $produitsArray = [];

        foreach ($produits as $produit) {
            $produitArray = [
                'nomProd' => $produit->getNomProd(),
                'description' => $produit->getDescription(),
                'prix' => $produit->getPrix(),
                'image' => $produit->getImage(),
            ];
            $produitsArray[] = $produitArray;
        }

        return new JsonResponse($produitsArray);
    }

/**
 * @Route("/produits/rechercher-par-prix", name="rechercherParPrix")
 */
public function rechercherParPrix(Request $request): JsonResponse
{
    $prixMin = $request->query->get('prixMin');
    $prixMax = $request->query->get('prixMax');

    $repository = $this->getDoctrine()->getRepository(Produit::class);
    $queryBuilder = $repository->createQueryBuilder('p')
        ->where('p.prix >= :prixMin')
        ->andWhere('p.prix <= :prixMax')
        ->setParameter('prixMin', $prixMin)
        ->setParameter('prixMax', $prixMax);

    $produits = $queryBuilder->getQuery()->getResult();

    $response = [];
    foreach ($produits as $produit) {
        $response[] = [
            'nomProd' => $produit->getNomProd(),
                'description' => $produit->getDescription(),
                'prix' => $produit->getPrix(),
                'image' => $produit->getImage(),
        ];
    }

    return new JsonResponse($response);
}


/**
 * @Route("/produits/rechercher-par-prix-et-nom", name="rechercherParPrixEtNom")
 */
public function rechercherParPrixEtNom(Request $request): JsonResponse
{
    $prixMin = $request->query->get('prixMin');
    $prixMax = $request->query->get('prixMax');
    $nom = $request->query->get('nom');

    $repository = $this->getDoctrine()->getRepository(Produit::class);
    $queryBuilder = $repository->createQueryBuilder('p')
        ->where('p.prix >= :prixMin')
        ->andWhere('p.prix <= :prixMax')
        ->andWhere('LOWER(p.nomProd) LIKE :nom')
        ->setParameter('prixMin', $prixMin)
        ->setParameter('prixMax', $prixMax)
        ->setParameter('nom', '%' . strtolower($nom) . '%');

    $produits = $queryBuilder->getQuery()->getResult();

    $response = [];
    foreach ($produits as $produit) {
        $response[] = [
            'nomProd' => $produit->getNomProd(),
            'description' => $produit->getDescription(),
            'prix' => $produit->getPrix(),
            'image' => $produit->getImage(),
        ];
    }

    return new JsonResponse($response);
}





    public function triProd(Request $request)
    {
        $tri = $request->triProd('tri', 'nb_likes_desc');
    
        switch ($tri) {
            case 'nb_likes_asc':
                $produits = $this->produitRepository->trierParNbLikesAsc();
                break;
            case 'nb_dislikes_desc':
                $produits = $this->produitRepository->trierParNbDislikesDesc();
                break;
            case 'prix_asc':
                $produits = $this->produitRepository->trierParPrixAsc();
                break;
            case 'prix_desc':
                $produits = $this->produitRepository->trierParPrixDesc();
                break;
            case 'quantite_asc':
                $produits = $this->produitRepository->trierParQuantiteAsc();
                break;
            case 'quantite_desc':
                $produits = $this->produitRepository->trierParQuantiteDesc();
                break;
            default:
                $produits = $this->produitRepository->getAll();
                break;
        }
    
        return view('produits.index', compact('produits'));
    }



}
