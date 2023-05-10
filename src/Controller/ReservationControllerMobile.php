<?php

namespace App\Controller;
use App\Entity\ReservationJson;

use App\Entity\Reservation;
use App\Repository\ReservationRepository;
use App\Repository\UsersRepository;

use App\Repository\EventRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReservationControllerMobile extends AbstractController
{
    #[Route('/reservations/json', name: 'app_reservations_json')]
    public function index(): Response
    {
        return $this->render('reservation_json/index.html.twig', [
            'controller_name' => 'ReservationControllerMobile',
        ]);
    }
    #[Route("/listReservationsJson", name: "list")]
    
    public function getRes(ReservationRepository $repo,EventRepository $repoEvent, SerializerInterface $serializer)
    {  // dd($repoEvent->find(3));
        $reservations = $this->getDoctrine()->getRepository(Reservation::class)->findAll();
        $reservationsJson = []; // create an empty array for ReservationJson objects
        foreach ($reservations as $reservation) {
            $event = $reservation->getIdevent() ; 
            $user = $reservation->getIduser() ;
            $reservationJson = new ReservationJson($reservation->getNumRes(),$event->getNomEvent(),$user->getNom(),$reservation->getNbplaces());
            $reservationsJson[] = $reservationJson; 
         }

       

        $json = $serializer->serialize($reservationsJson, 'json', ['reservations' => "reservations"]);

        return new Response($json);
    }
    

    #[Route("/ReservationJson/{numRes}", name: "reservation_by_numRes", methods: ["GET"])]
    public function getReservationByNumRes(Request $request, NormalizerInterface $normalizer, ReservationRepository $repo, $numRes)
    {
        $reservation = $repo->findOneBy(["numres" => $numRes]);
        
        if (!$reservation) {
            return new JsonResponse(["message" => "Aucune réservation trouvée pour le numéro de réservation $numRes"], Response::HTTP_NOT_FOUND);
        }
        
        $reservationData = $normalizer->normalize($reservation, null, ["groups" => "reservation:read"]);
        
        return new JsonResponse($reservationData);
    }
    
    #[Route('/ResJ/{numres}', name: 'userS_offresbyid_json')]
    public function offresClient(SerializerInterface $serializer,$numres)
    {
        $repository = $this->getDoctrine()->getRepository(Reservation::class);
        $reservations = $repository->findBy(['numres'=>$numres]);   
        $json = $serializer->serialize($reservations, 'json', ['reseravtions' => "reservations"]);

        //* Nous renvoyons une réponse Http qui prend en paramètre un tableau en format JSON
        return new Response($json);
    } 
    
    
       /* #[Route("/ReservationJson/edit", name: "editfr",methods: ['GET', 'POST'])]
        public function Modifier( Request $request,NormalizerInterface $normalizer,ManagerRegistry $doctrine, ReservationRepository $repo)
        {   dd("hello");
             $id = $request->query->get("numRes");
            $reservation = $repo->find($id);
            $idUser = $request->query->get("idUser");
            $idEvent = $request->query->get("idEvent");
            $nb = $request->query->get("nbPlaces");
           
           $reservation ->setIduser($idUser);
           $reservation ->setIdevent($idEvent);
           $reservation ->setNbplaces($nb);
           
            $manager = $doctrine->getManager();
            $manager->persist($reservation );

            $manager->flush();
            return new JsonResponse($reservation );
            }*/

     
         
        
    
            // #[Route("/ReservationJson/add", name: "res_add")]
            // public function signupFr( Request $request,NormalizerInterface $normalizer,ManagerRegistry $doctrine, ReservationRepository $repo,UsersRepository $repoU,EventRepository $repoEvent)
            // {   $reservation = new Reservation(); 
              
               
            //      $idEvent = $request->query->get("idEvent");
            //     $idUser = $request->query->get("idUser");
            //     $nbplaces = $request->query->get("nbPlaces");
        

              
            //      $ev=$repoEvent->find($idEvent);
            //      $reservation->setIdevent($ev);
            //      $reservation->setIduser($repoU->find($idUser));
            //      $reservation->setNbplaces($nbplaces);
              

            //      $manager = $doctrine->getManager();
            //      $manager->persist($reservation);
    
            //      $manager->flush();
            //      return new JsonResponse($reservation );
            //     }
                
    
    #[Route("addReservationJSON", name: "updateStudentJSON")]
    public function updateStudentJSON(Request $request, NormalizerInterface $Normalizer,ManagerRegistry $doctrine,UsersRepository $repoU,EventRepository $repoEvent)
    {
        $reservation = new Reservation(); 
            //  dd("waaaaaa");
               
        $idEvent = $request->query->get("idEvent");
       $idUser = $request->query->get("idUser");
       $nbplaces = $request->query->get("nbPlaces");


     
        $ev=$repoEvent->find($idEvent);
        $reservation->setIdevent($ev);
        $reservation->setIduser($repoU->find($idUser));
        $reservation->setNbplaces($nbplaces);
     

        $manager = $doctrine->getManager();
        $manager->persist($reservation);

        $manager->flush();
        return new JsonResponse($reservation );
    }
    #[Route("updateReservationJSON/{numRes}", name: "updateReservationJSON")]
public function updateReservationJSON(Request $request, $numRes, NormalizerInterface $Normalizer,ManagerRegistry $doctrine,UsersRepository $repoU,EventRepository $repoEvent)
{
    $reservation = $doctrine->getRepository(Reservation::class)->find($numRes);

    if (!$reservation) {
        return new JsonResponse(['error' => 'Reservation not found']);
    }

    $idEvent = $request->query->get("idEvent");
    $idUser = $request->query->get("idUser");
    $nbPlaces = $request->query->get("nbPlaces");

    if ($idEvent) {
        $ev = $repoEvent->find($idEvent);
        $reservation->setIdevent($ev);
    }

    if ($idUser) {
        $user = $repoU->find($idUser);
        $reservation->setIduser($user);
    }

    if ($nbPlaces) {
        $reservation->setNbplaces($nbPlaces);
    }

    $manager = $doctrine->getManager();
    $manager->persist($reservation);
    $manager->flush();

    $normalizedReservation = $Normalizer->normalize($reservation, null, ['groups' => 'reservation']);

    return new JsonResponse($normalizedReservation);
}


    #[Route("deleteReservationJSON/{numRes}", name: "deleteReservationJSON")]
    public function deleteStudentJSON(Request $req, $numRes, NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $reservation = $em->getRepository(Reservation::class)->find($numRes);
        $em->remove($reservation);
        $em->flush();
        $jsonContent = $Normalizer->normalize($reservation, 'json', ['groups' => 'reservations']);
        return new Response("Student deleted successfully " . json_encode($jsonContent));
    }
}