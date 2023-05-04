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


class UsersMobileController extends AbstractController
{
 


          


  /**
     * @Route("/users_mobile", name="users_mobile")
     */    public function usersmobile( NormalizerInterface  $normalizer)
    {
        $Hotel = $this->getDoctrine()->getRepository(Users::class)->findAll();
        $json = $normalizer->normalize($Hotel, "json", ['groups' => ['user','user']]);
        return new JsonResponse($json);

    }

   










 
    
     /**
     * @Route("/newusers_mobile/{prenom}/{nom}/{email}/{datenaissance}/{numtel}/{userrole}/{password}", name="newusers_mobile", methods={"GET","POST"})
     */
    public function newusers($prenom,$nom,$email,$datenaissance,$numtel,$userrole,$password,NormalizerInterface  $normalizer )
    {

        $user = new Users();
        
        $user->setPrenom($prenom);
        $user->setNomn($nom);
        $user->setEmail($email);

        $user->setDatenaissance($datenaissance);

        $user->setNumtel($numtel);

        $user->setUserrole($userrole);
        $user->setPassword($password);




        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();
        $json = $normalizer->normalize($user, "json", ['groups' => ['user']]);
        return new JsonResponse($json);

    }









     
    /**
     * @Route("/SupprimerUsers", name="SupprimerUsers")
     */
    public function SupprimerUsers(Request $request)
    {

        $idE = $request->get("id");
        $em = $this->getDoctrine()->getManager();
        $Hotel = $em->getRepository(Users::class)->find($idE);
        if($Hotel != null)
        {
            $em->remove($Hotel);
            $em->flush();
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formated = $serializer->normalize("Utilisateur a été supprimer avec succées ");
            return new JsonResponse($formated);
        }

    }









    



       /**
     * @Route("/updateUsers", name="updateUsers")
     */
    public function updateUsers(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $Hotel = $this->getDoctrine()->getManager()->getRepository(Users::class)->find($request->get("id"));


        $Hotel->setNomProd($request->get("nomProd"));
        $Hotel->setDescription($request->get("description"));
        $Hotel->setNomPart($request->get("nomPart"));


        $em->persist($Hotel);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($Hotel);
        return new JsonResponse("Produit a ete modifiee avec success.");

    }





}