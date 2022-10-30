<?php

namespace App\Controller;

use App\Entity\Agriculteur;
use App\Security\EmailVerifier;
use Symfony\Component\Mime\Address;
use App\Repository\CategorieRepository;
use App\Repository\AgriculteurRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use App\Form\Agriculteur\RegistrationFormType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class SecurityController extends AbstractController
{

    /**
     * @Route("/inscription", name="app_registere")
     */
    public function registerAgri(Request $request, UserPasswordHasherInterface $userPasswordHasherInterface, 
    CategorieRepository $categorie,MailerInterface $mailer): Response
    {
        $agriculteur = new Agriculteur;
        $form = $this->createForm(RegistrationFormType::class, $agriculteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $agriculteur->setPassword(
                $userPasswordHasherInterface->hashPassword(
                    $agriculteur,
                    $form->get('password')->getData()
                )
            );
            $agriculteur->setEtat('attente');
            $agriculteur->setActivationToken(md5(uniqid()));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($agriculteur);
            $entityManager->flush();

            // do anything else you need here, like send an email

    
                $email = (new TemplatedEmail())
                    ->from(new Address('service.locavor@gmail.com', 'Inscription Locavor'))
                    ->to($agriculteur->getEmail())
                    ->subject('Veuillez confirmer votre email')
                    ->htmlTemplate(
            'email/confirmation_email.html.twig')
                    ->context([
                        'expiration_date' => new \DateTime('+7 days'),
                        'agriculteur' => $agriculteur,
                        'token' =>  $agriculteur->getActivationToken()
    
                    ]);  
            
            $mailer->send($email);
            return $this->redirectToRoute('app_login');
        }

        return $this->render('agriculteur/inscription.html.twig', [
            'registrationForm' => $form->createView(),
            'categorie' => $categorie
        ]);
    }

    /**
     * @Route("/activation/{token}", name="activation")
     */
    public function activation($token, AgriculteurRepository $users, MailerInterface $mailer)
    {
        // On recherche si un utilisateur avec ce token existe dans la base de données
        $user = $users->findOneBy(['activation_token' => $token]);

        // Si aucun utilisateur n'est associé à ce token
        if (!$user) {
            // On renvoie une erreur 404
            throw $this->createNotFoundException('Cet utilisateur n\'existe pas');
        }

        // On supprime le token
        $user->setActivationToken(null);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();


        // On envoie un mail a l admin 
        $email = (new TemplatedEmail())
        ->from(new Address('service.locavor@gmail.com', 'Inscription Locavor'))
        // j'envoie a l'admin, ici jecris son adresse mail en dur 
        ->to('testnedlix@gmail.com')
        ->subject('Nouvelle inscription sur votre site')
        ->htmlTemplate(
'email/signup_admin_email.html.twig')
        ->context([
            'username' => $user,
            'nom_domaine' => $user->getNomDomaine(),
            'date' => new \DateTime,
        ]);  

        $mailer->send($email);

        // On génère un message
        $this->addFlash('message', 'Utilisateur activé avec succès');

        // On retourne à l'accueil
        return $this->redirectToRoute('agriculteur_index');
    }


    /**
     * @Route("/connexion", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('agriculteur_index');
        }
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('security/login_user.html.twig', [
            'last_username' => $lastUsername, 
            'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
        throw new \LogicException('Il y a une erreur');
    }
}
