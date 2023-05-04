<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


class SerializerController extends AbstractController
{
    #[Route('/allUsers', name: 'app_json')]
    public function allColis(NormalizerInterface $normalizer): JsonResponse
    {
        $users = $this->getDoctrine()->getRepository(Users::class)->findAll();
        
        $jsonContent = $normalizer->normalize($users, null, ['groups' => 'users']);
    
        return new JsonResponse($jsonContent);
    }
    #[Route('/allColis/{id}', name: 'app_users_json')]
    public function ColisID($id, NormalizerInterface $normalizer): JsonResponse
    {
        $users = $this->getDoctrine()->getRepository(Users::class)->find($id);
        
        $jsonContent = $normalizer->normalize($users, null, ['groups' => 'users']);
    
        return new JsonResponse($jsonContent);
    }
    #[Route('/new', name: 'app_json_new')]
    public function Add (Request $request, EntityManagerInterface $entityManager, NormalizerInterface $normalizer): Response
    {    
    $coli = new Colis();
    $user = $entityManager->getRepository(User::class)->find(161);
    $coli->setIdu($user);
    $coli->setNomExpediteur($request->get("NomExpediteur"));
    $coli->setNomExpediteur($request->get("AdressseExpediteur"));
    $coli->setNomExpediteur($request->get("NomDestinataire"));
    $coli->setNomExpediteur($request->get("AdresseDestinataire"));
    $coli->setNomExpediteur($request->get("poids"));
    $entityManager->persist($coli);
    $entityManager->flush();
    $jsonContent = $normalizer->normalize($coli, 'json', ['groups' => 'users']);
        return new Response(json_encode($jsonContent));
    

}
#[Route('/{id}/edit', name:'app_json_edit')]
public function updateJson(Request $req,$id,NormalizerInterface $Normalizer)
{   
    $entityManager=$this->getDoctrine()->getManager();
    $coli=$entityManager->getRepository(Colis::class)->find($id);
    $user = $entityManager->getRepository(User::class)->find(161);
    $coli->setIdu($user);
    $coli->setNomExpediteur($req->get("NomExpediteur"));
    $coli->setNomExpediteur($req->get("AdressseExpediteur"));
    $coli->setNomExpediteur($req->get("NomDestinataire"));
    $coli->setNomExpediteur($req->get("AdresseDestinataire"));
    $coli->setNomExpediteur($req->get("poids"));
    $entityManager->persist($coli);
    $entityManager->flush();
    $jsonContent = $Normalizer->normalize($coli, 'json', ['groups' => 'colis']);
        return new Response(json_encode($jsonContent));

}



#[Route('/delete/{id}', name: 'app_json_delete')]
public function delete(Request $request, Colis $colis,$id): JsonResponse
{   
    $colis= $this->getDoctrine()->getRepository(Colis::class)->find($id);
    $entityManager = $this->getDoctrine()->getManager();
    $entityManager->remove($colis);
    $entityManager->flush();

    return new JsonResponse([
        'message' => 'Le colis a été supprimé avec succès.'
    ]);
}
}