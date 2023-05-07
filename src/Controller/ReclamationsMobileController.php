<?php

namespace App\Controller;

use App\Entity\Reclamations;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class ReclamationsMobileController extends AbstractController
{


    /**
     * @Route("/reclamations_mobile", name="reclamations_mobile")
     */    public function reclamationsmobile( NormalizerInterface  $normalizer)
    {
        $Hotel = $this->getDoctrine()->getRepository(Reclamations::class)->findAll();
        $json = $normalizer->normalize($Hotel, "json", ['groups' => ['reclams','reclams']]);
        return new JsonResponse($json);

    }

   
     /**
     * @Route("/newreclamations_mobile/{prenom}/{nom}/{email}/{message}", name="newreclamations_mobile", methods={"GET","POST"})
     */
    public function newreclamations($prenom,$nom,$email,$message,NormalizerInterface  $normalizer )
    {

        $reclams = new Reclamations();
        
        $reclams->setPrenom($prenom);
        $reclams->setNom($nom);
        $reclams->setEmail($email);
        $reclams->setMessage($message);





        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($reclams);
        $entityManager->flush();
        $json = $normalizer->normalize($reclams, "json", ['groups' => ['reclams']]);
        return new JsonResponse($json);

    }


     
    /**
     * @Route("/SupprimerReclamations", name="SupprimerReclamations")
     */
    public function SupprimerReclamations(Request $request)
    {

        $idE = $request->get("id");
        $em = $this->getDoctrine()->getManager();
        $Hotel = $em->getRepository(Reclamations::class)->find($idE);
        if($Hotel != null)
        {
            $em->remove($Hotel);
            $em->flush();
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formated = $serializer->normalize("Reclamation a ete supprimer avec succees ");
            return new JsonResponse($formated);
        }

    }


       /**
     * @Route("/updateReclamations", name="updateReclamations")
     */
    public function updateReclamations(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $Hotel = $this->getDoctrine()->getManager()->getRepository(Reclamations::class)->find($request->get("id"));



                
        $Hotel->setPrenom($request->get("prenom"));
        $Hotel->setNom($request->get("nom"));
        $Hotel->setEmail($request->get("email"));
        $Hotel->setMessage($request->get("message"));



        $em->persist($Hotel);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($Hotel);
        return new JsonResponse("Reclamation a ete modifiee avec success.");

    }


}