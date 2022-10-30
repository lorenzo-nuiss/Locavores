<?php

namespace App\Controller\Admin;

use App\Repository\AdminRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;



class SecurityController extends AbstractController
{
    /**
     * @Route("/admin-connexion", name="app_login_admin")
     */
    public function login(AuthenticationUtils $authenticationUtils,Request $request, AdminRepository $adminRepo)
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('admin');
        }

        // if ($request->isMethod('POST')) {
        //     $username = $request->request->get('username');
        //     $mdp = $request->request->get('password');
        //     $res = $adminRepo->findBy(array('username' => $username, 'password' => $mdp));
        //     if (empty($res)) {
        //         $this->addFlash("alert", "Nom d'utilisateur ou mot de passe incorrect");
        //         return $this->redirectToRoute('allAgri.admin');
        //     } 
        // }


        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('security/login_admin.html.twig',[
            'last_username' => $lastUsername, 
            'error' => $error]);
    }

    /**
     * @Route("admin/logout", name="app_logout_admin")
     */
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
