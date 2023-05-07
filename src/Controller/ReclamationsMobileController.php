<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

 use App\Entity\Reclamations;
 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\HttpFoundation\JsonResponse;
 use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
 use Symfony\Component\Serializer\Serializer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Validator\Constraints\Json;

class ReclamationsMobileController extends  AbstractController
{


    /******************Ajouter Reclamation*****************************************/
     /**
      * @Route("/addReclamation", name="add_reclamation")
      * @Method("POST")
      */

     public function ajouterReclamationAction(Request $request)
     {
         $reclamation = new Reclamations();
         $prenom = $request->query->get("prenom");
         $nom = $request->query->get("nom");
         $email = $request->query->get("email");
         $message = $request->query->get("message");
         $em = $this->getDoctrine()->getManager();

         $reclamation->setPrenom($prenom);
         $reclamation->setNom($nom);
         $reclamation->setEmail($email);
         $reclamation->setMessage($message);

         $em->persist($reclamation);
         $em->flush();
         $serializer = new Serializer([new ObjectNormalizer()]);
         $formatted = $serializer->normalize($reclamation);
         return new JsonResponse($formatted);

     }

     /******************Supprimer Reclamation*****************************************/

     /**
      * @Route("/deleteReclamation", name="delete_reclamation")
      * @Method("DELETE")
      */

     public function deleteReclamationAction(Request $request) {
         $id = $request->get("id");

         $em = $this->getDoctrine()->getManager();
         $reclamation = $em->getRepository(Reclamations::class)->find($id);
         if($reclamation!=null ) {
             $em->remove($reclamation);
             $em->flush();

             $serialize = new Serializer([new ObjectNormalizer()]);
             $formatted = $serialize->normalize("Reclamation a ete supprimee avec success.");
             return new JsonResponse($formatted);

         }
         return new JsonResponse("id reclamation invalide.");


     }

    /******************Modifier Reclamation*****************************************/
    /**
     * @Route("/updateReclamation", name="update_reclamation")
     * @Method("PUT")
     */
    public function modifierReclamationAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $this->getDoctrine()->getManager()
                        ->getRepository(Reclamations::class)
                        ->find($request->get("id"));

        $reclamation->setPrenom($request->get("prenom"));
        $reclamation->setNom($request->get("nom"));
        $reclamation->setEmail($request->get("email"));
        $reclamation->setMessage($request->get("message"));
 


        $em->persist($reclamation);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reclamation);
        return new JsonResponse("Reclamation a ete modifiee avec success.");

    }



    /******************affichage Reclamation*****************************************/

     /**
      * @Route("/displayReclamations", name="display_reclamation")
      */
     public function allRecAction()
     {

         $reclamation = $this->getDoctrine()->getManager()->getRepository(Reclamations::class)->findAll();
         $serializer = new Serializer([new ObjectNormalizer()]);
         $formatted = $serializer->normalize($reclamation);

         return new JsonResponse($formatted);

     }


     /******************Detail Reclamation*****************************************/

     /**
      * @Route("/detailReclamation/{id}", name="detail_reclamation")
      * @Method("GET")
      */
     //Detail Reclamation
     public function detailReclamationAction(Request $request)
     {
         $id = $request->get("id");

         $em = $this->getDoctrine()->getManager();
         $reclamation = $this->getDoctrine()->getManager()->getRepository(Reclamations::class)->find($id);
         $encoder = new JsonEncoder();
         $normalizer = new ObjectNormalizer();
         $normalizer->setCircularReferenceHandler(function ($object) {
             return $object->getMessage();
         });
         $serializer = new Serializer([$normalizer], [$encoder]);
         $formatted = $serializer->normalize($reclamation);
         return new JsonResponse($formatted);
     }

 }