<?php

namespace App\Controller\Admin;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="admin_index")
     */
    public function index(): Response
    {
        return $this->render('admin/profil.html.twig');
    }

    /**
     * @Route("/", name="profil.admin")
     */
    public function Profil(): Response
    {
        return $this->render('admin/profil.html.twig');
    }



    /**
     * @Route("/supprmier-mon-compte/", name="deleteAdmin")
     */

    public function deleteCategorie(EntityManagerInterface $manager, Request $request)
    {

        if ($this->isCsrfTokenValid('delete', $request->request->get('_token'))) {

        $user = $this->getUser();
        $manager->remove($user);
        $manager->flush();
        $this->addFlash("success", "Compte admin supprimé");
    }
        return $this->redirectToRoute("app_logout");
    }
}
