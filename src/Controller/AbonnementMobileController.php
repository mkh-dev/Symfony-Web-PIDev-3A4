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
use App\Entity\Abonnement;


class AbonnementMobileController extends AbstractController
{


  /**
     * @Route("/abonnement_mobile", name="abonnemnt_mobile")
     */    public function abonnementmobile( NormalizerInterface  $normalizer)
    {
        $Hotel = $this->getDoctrine()->getRepository(Abonnement::class)->findAll();
        $json = $normalizer->normalize($Hotel, "json", ['groups' => ['abonnements','abonnements']]);
        return new JsonResponse($json);

    }

     /**
     * @Route("/newabonnement_mobile/{idUser}/{prix}/{type}/{renouvellement}/{dateExpire}/{plafond}/{currency}", name="newabonnement_mobile", methods={"GET","POST"})
     */
    public function newabonnement($idUser,$prix,$type,$renouvellement,$dateExpire,$plafond,$currency,NormalizerInterface  $normalizer )
    {

        $abonnement = new Abonnement();
        
        $abonnement->setIdUser($idUser);
        $abonnement->setPrix($prix);
        $abonnement->setType($type);
        

        $abonnement->setRenouvellement($renouvellement);

        $abonnement->setDateExpire($dateExpire);

        $abonnement->setPlafond($plafond);
        $abonnement->setCurrency($currency);




        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($abonnement);
        $entityManager->flush();
        $json = $normalizer->normalize($abonnement, "json", ['groups' => ['abonnements']]);
        return new JsonResponse($json);

    }









     
    /**
     * @Route("/SupprimerAbonnement", name="SupprimerAbonnement")
     */
    public function SupprimerAbonnement(Request $request)
    {

        $idE = $request->get("idAbonnement");
        $em = $this->getDoctrine()->getManager();
        $Hotel = $em->getRepository(Abonnement::class)->find($idE);
        if($Hotel != null)
        {
            $em->remove($Hotel);
            $em->flush();
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formated = $serializer->normalize("Abbonnement supprimé avec succées ");
            return new JsonResponse($formated);
        }

    }





       /**
     * @Route("/updateAbonnement", name="updateAbonnement")
     */
    public function updateAbonnement(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $Hotel = $this->getDoctrine()->getManager()->getRepository(Abonnement::class)->find($request->get("idAbonnement"));


        $Hotel->setIdUser($request->get("idUser"));
        $Hotel->setDateExpire($request->get("dateExpire"));
        $Hotel->setPrix($request->get("Prix"));


        $em->persist($Hotel);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($Hotel);
        return new JsonResponse("Abonnement modifiee avec success.");

    }






 


}
