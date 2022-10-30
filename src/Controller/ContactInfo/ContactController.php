<?php

namespace App\Controller\ContactInfo;

use App\Form\ContactInfo\ContactFormType;
use App\Repository\ContactInfoRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{

    /**
     * @Route("/admin/informations_contact", name="updateContact.admin")
     */
    public function updateContact(Request $request, ContactInfoRepository $repContact)
    {
        // unique table
        $id= 1;
        $contact = $repContact->find($id);
        $form = $this->createForm(ContactFormType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $cnx = $this->getDoctrine()->getManager();
            $cnx->persist($contact);
            $cnx->flush();

            $this->addFlash("success", "Les informations de contact ont bien été modifié");
            return $this->redirectToRoute('updateContact.admin');
        }
        return $this->render('admin/contact/updateContact.html.twig', [
            'form' => $form->createView(),
            'contactInfo' => $contact
        ]);
    }

}
