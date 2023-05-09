<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use App\Entity\Produit;


class ProduitMobileController extends AbstractController
{
 


          


  /**
     * @Route("/produit_mobile", name="produit_mobile")
     */    public function produitmobile( NormalizerInterface  $normalizer)
    {
        $Hotel = $this->getDoctrine()->getRepository(Produit::class)->findAll();
        $json = $normalizer->normalize($Hotel, "json", ['groups' => ['produits','produits']]);
        return new JsonResponse($json);

    }

   










 
    
     /**
     * @Route("/newproduit_mobile/{nomProd}/{description}/{prix}/{quantite}/{nomPart}/{image}/{nbLikes}/{nbDislikes}", name="newproduit_mobile", methods={"GET","POST"})
     */
    public function newproduit($nomProd,$description,$prix,$quantite,$nomPart,$image,$nbLikes,$nbDislikes,NormalizerInterface  $normalizer )
    {

        $produit = new Produit();
        
        $produit->setNomProd($nomProd);
        $produit->setDescription($description);
        $produit->setPrix($prix);

        $produit->setQuantite($quantite);

        $produit->setNomPart($nomPart);

        $produit->setImage($image);
        $produit->setNbLikes($nbLikes);
        $produit->setNbDislikes($nbDislikes);




        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($produit);
        $entityManager->flush();
        $json = $normalizer->normalize($produit, "json", ['groups' => ['produits']]);
        return new JsonResponse($json);

    }









     
    /**
     * @Route("/SupprimerProduit", name="SupprimerProduit")
     */
    public function SupprimerProduit(Request $request)
    {

        $idE = $request->get("idProd");
        $em = $this->getDoctrine()->getManager();
        $Hotel = $em->getRepository(Produit::class)->find($idE);
        if($Hotel != null)
        {
            $em->remove($Hotel);
            $em->flush();
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formated = $serializer->normalize("Produit ete supprimer avec succées ");
            return new JsonResponse($formated);
        }

    }









    



       /**
     * @Route("/updateProduit", name="updateProduit")
     */
    public function updateProduit(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $Hotel = $this->getDoctrine()->getManager()->getRepository(Produit::class)->find($request->get("idProd"));


        $Hotel->setNomProd($request->get("nomProd"));
        $Hotel->setDescription($request->get("description"));
        $Hotel->setNomPart($request->get("nomPart"));


        $em->persist($Hotel);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($Hotel);
        return new JsonResponse("Produit a ete modifiee avec success.");

    }






       /**
     * @Route("/produit_mobile_stat", name="produit_mobile_stat", methods={"GET"})
     */

     public function StatAction()
     {
         $statistique=$this->getDoctrine()->getRepository(Produit::class)->statistique_produit();
         $serializer = new Serializer( [new ObjectNormalizer()]);
         $formated = $serializer->normalize($statistique);
         return new JsonResponse($formated);
     }
 
 
 







}