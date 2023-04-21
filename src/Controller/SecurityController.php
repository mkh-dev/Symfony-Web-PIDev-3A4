<?php

namespace App\Controller;
use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\UsersRepository;



class SecurityController extends AbstractController
{


    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }


    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        if ($this->getUser()) {
            $userrole = $this->getUser()->getUserrole();
            if ($userrole == 'administrateur') {
                return $this->redirectToRoute('app_users_index');
            } elseif ($userrole == 'organisateur') {
                return $this->redirectToRoute('organisateur_homepage');
            } elseif ($userrole == 'transporteur') {
                return $this->redirectToRoute('transporteur_homepage');
            } elseif ($userrole == 'partenaire') {
                return $this->redirectToRoute('partenaire_homepage');
            }
        }
        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }


/**
 * @Route("/forgot-password", name="app_forgot_password")
 */
public function forgotPassword(Request $request, MailerInterface $mailer, UsersRepository $usersRepository): Response
{
    if ($request->isMethod('POST')) {
        // Get the submitted email address
        $email = $request->request->get('email');

        // Check if the email address exists in the database
        $user = $usersRepository->findOneBy(['email' => $email]);
        if (!$user) {
            $this->addFlash('danger', 'Adresse e-mail inconnue.');

            return $this->redirectToRoute('app_forgot_password');
        }

        // Generate a random code
        $code = bin2hex(random_bytes(5));

        // Save the code to the session
        $this->session->set('reset_code', $code);

        // Send an email with the code
        $message = (new \Symfony\Component\Mime\Email())
            ->from('pidevento@gmail.com')
            ->to($email)
            ->subject('Réinitialisation de mot de passe')
            ->text("Votre code de réinitialisation de mot de passe est: $code");
        $mailer->send($message);

        return $this->redirectToRoute('app_code_password', ['email' => $email]);
    }

    return $this->render('security/forgot_password.html.twig');
}

/**
 * @Route("/reset-password", name="app_code_password")
 */
public function codePassword(Request $request): Response
{
    $email = $request->query->get('email');
    $session = $request->getSession();
    $code = $session->get('reset_code');

    if ($code === null) {
        $this->addFlash('danger', 'Code de réinitialisation invalide ou expiré.');

        return $this->redirectToRoute('app_forgot_password');
    }

    if ($request->isMethod('POST')) {
        $user_code = $request->request->get('code');
        if ($user_code !== $code) {
            $this->addFlash('danger', 'Le code saisi est incorrect.');

            return $this->redirectToRoute('app_code_password', ['email' => $email]);
        }

        // If the code is correct, remove it from the session
        $session->remove('reset_code');

        // Redirect to the new password page
        return $this->redirectToRoute('app_new_password', ['email' => $email]);
    }

    return $this->render('security/code_password.html.twig', [
        'email' => $email,
        'code' => $code,
    ]);
}



/**
 * @Route("/new-password", name="app_new_password")
 */
public function newPassword(Request $request, UsersRepository $usersRepository, UserPasswordEncoderInterface $passwordEncoder): Response
{
    $email = $request->query->get('email');
    $session = $request->getSession();
    $code = $session->get('reset_code');

    if ($code === null) {
        $this->addFlash('danger', 'Code de réinitialisation invalide ou expiré.');

        return $this->redirectToRoute('app_forgot_password');
    }

    if ($request->isMethod('POST')) {
        $submittedCode = $request->request->get('code');
        $password = $request->request->get('password');
        $confirmPassword = $request->request->get('confirm_password');

        if ($submittedCode === $code) {
            $user = $usersRepository->findOneBy(['email' => $email]);
            if (!$user) {
                throw $this->createNotFoundException('Utilisateur non trouvé.');
            }

            if ($password !== $confirmPassword) {
                $this->addFlash('danger', 'Les deux mots de passe ne correspondent pas.');

                return $this->redirectToRoute('app_new_password', ['email' => $email]);
            }

            $encodedPassword = $passwordEncoder->encodePassword($user, $password);
            $user->setPassword($encodedPassword);
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Votre mot de passe a été réinitialisé.');

            return $this->redirectToRoute('app_login');
        } else {
            $this->addFlash('danger', 'Code de réinitialisation incorrect.');

            return $this->redirectToRoute('app_code_password', ['email' => $email]);
        }
    }
    return $this->render('security/new_password.html.twig', [
        'email' => $email,
    ]);
}

}