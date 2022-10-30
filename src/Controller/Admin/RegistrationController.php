<?php

namespace App\Controller\Admin;

use App\Entity\Admin;
use App\Entity\ContactInfo;
use App\Form\Admin\RegistrationAdminFormType;
use App\Form\ContactInfo\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/admin/inscription_admin", name="app_register_admin")
     */
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasherInterface): Response
    {
        $user = $this->getUser();
        if ($user->getRoles('ROLE_SUPER_ADMIN')){

            $admin = new Admin();
            $form = $this->createForm(RegistrationAdminFormType::class, $admin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $admin->setPassword(
            $userPasswordHasherInterface->hashPassword(
                    $admin,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($admin);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('admin_index');
        }
    }

        return $this->render('registration/registerAdmin.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
