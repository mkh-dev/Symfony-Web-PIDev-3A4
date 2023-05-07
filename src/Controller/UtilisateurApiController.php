<?php

namespace App\Controller;

use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class UtilisateurApiController extends AbstractController
{
    /**
     * @Route("/user/signup", name="app_register_mobile")
     */
    public function signupAction(Request $request,  UserPasswordEncoderInterface $passwordEncoder)
    {

        $prenom = $request->query->get('prenom');
        $nom = $request->query->get('nom');
        $email = $request->query->get('email');
        $datenaissance = $request->query->get('datenaissance');
        $numtel = $request->query->get('numtel');
        $userrole = $request->query->get('userrole');
        $password = $request->query->get('password');
        
        // Vérification de l'email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return new Response('Email invalide.');
        }
        
        $user = new Users();
        $user->setPrenom($prenom);
        $user->setNom($nom);
        $user->setEmail($email);
        $user->setDatenaissance(new \DateTime($datenaissance));
        $user->setNumtel($numtel);
        $user->setPassword(
            $passwordEncoder->encodePassword(
            $user,
            $password)
            );

        $user->setIsVerified(true); // par défaut, l'utilisateur est activé

        $user->setUserrole($userrole); // les rôles sont définis comme un tableau
        
        try {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            return new JsonResponse('Le compte est créé.', 200);
        } catch (\Exception $ex) {
            return new Response('Erreur : '.$ex->getMessage());
        }
    }

    

    
  /**
 * @Route("/user/signin", name="app_login_mobile")
 */
public function signinAction(Request $request)
{
    $email = $request->query->get('email');
    $password = $request->query->get('password');

    $em = $this->getDoctrine()->getManager();
    $user = $em->getRepository(Users::class)->findOneBy(['email' => $email]);

    if ($user) {
        if (password_verify($password, $user->getPassword())) {
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize($user);
            return new JsonResponse($formatted);
        } else {
            return new Response( content: "password not found");
        }
    } else {
        return new Response( content: "user not found");
    }
}


  /**
 * @Route("/user/editUser", name="app_gestion_profile")
 */
/**

public function editUser (Request $request, UserPasswordEncoderInterface $passwordEncoder) {
    $id = $request->get( key: "id");
    $prenom = $request->query->get('prenom');
        $nom = $request->query->get('nom');
        $email = $request->query->get('email');
        $datenaissance = $request->query->get('datenaissance');
        $numtel = $request->query->get('numtel');
        $userrole = $request->query->get('userrole');
        $password = $request->query->get('password');
    $em=$this->getDoctrine)->getManager();
    $user = $em->getRepository( className: Users :class)->find($id);
     
    if($request->files->get( key: "photo")!=Inull) {
        $file = $request->files->get( key: "photo");//njib image fi url
        $fileName = Sfile->getClientOriginalName( 0://nom ta3ho
         //taw na5ouha W n7otaha fi dossier upload ely tet7t fin Les images en principe te7t public fol
         $file->nove(
             $fileName
         );
        $user->setPhoto($fileName);
     $user->setPrenom ($prenom);
     $user->setNom ($nom);
     $user->setEmail ($prenom);
     $user->setPrenom ($prenom);
     $user->setPrenom ($prenom);
    $user->setPassword(
        $passwordEncoder->encodePassword(
             $user,
$password
)
);
$user->setEmail($email);
$user->setIsVerified(true);

try {
$em = $this -> getDoctrine()->getManager();
$em->persist($user);
$em->flush();

return new JsonResponse (data:"success", statue:200);
} catch (\Exception $ex){
return new Response (content: "fail" .$ex->getMessage());


}
*/


}
