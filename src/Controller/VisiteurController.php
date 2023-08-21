<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Entity\Agriculteur;
use App\Repository\CategorieRepository;
use App\Notification\ContactNotification;
use App\Repository\AgriculteurRepository;
use App\Repository\ContactInfoRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VisiteurController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function home(CategorieRepository $categorieRepo)
    {
        $categories = $categorieRepo->findAll();
        return $this->render('visiteur/home.html.twig',[
            'categories' => $categories,
        ]);
    }


    /**
     * liste des agriculteurs par categorie
     * @Route("/categorie/{categorie_name}", name="listAgriByCategorie")
     */
    public function listByCategorie(AgriculteurRepository $agriculteurRepo, CategorieRepository $categorieRepo, $categorie_name, Request $request)
    {
        $categorieSpacing = str_replace("_"," ",$categorie_name);
        $categorie = $categorieRepo->findOneBy(
            ['nom' => $categorieSpacing ]
        );
        // Je fixe la limite de producteurs a 10 par page
        $limit = 10;

        $page = (int)$request->query->get("page", 1);
        $agriculteurs = $agriculteurRepo->getPaginatedAgriculteurs($page, $limit, $categorie);
        $total = $agriculteurRepo->getTotalAgriculteurByCat($categorie);

        return $this->render('visiteur/listAgriByCategorie.html.twig',[
            'categ' => $categorie,
            'page' => $page,
            'limit' => $limit,
            'total' => $total,
            'agriculteurs' => $agriculteurs
        ]);
    }


    /**
     * @Route("/producteur/{name}/{id<\d+>}", name="showAgriVisiteur")
     */
    public function show(Agriculteur $agriculteur)
    {
        return $this->render('visiteur/showAgri.html.twig', [
            'agriculteur' => $agriculteur,
        ]);
    }


    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, ContactNotification $notification, ContactInfoRepository $repContact)
    {
        $id= 1;
        $contactInfo = $repContact->find($id);
        $contact = new Contact;
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $notification->notify($contact);
            $this->addFlash('sucess', 'Votre message à bien été envoyé');
            return $this->redirectToRoute('contact',[
            ]);

        }

        return $this->render('visiteur/contact.html.twig',[
            'form' => $form->createView(),
            'contactInfo' => $contactInfo,
        ]);
    }



    /**
     * @Route("/mentions-legales", name="mention")
     */
    public function mentionsLegales()
    {
        return $this->render('visiteur/mentionLeg.html.twig'
    );
    }

    /**
     * @Route("/politique-de-confidentialité", name="politiqueConfidentialite")
     */
    public function politiqueConfidentialite()
    {
        return $this->render('visiteur/PolitiqueDeConf.html.twig'
    );
    }


    public function headerAction( CategorieRepository $categorieRepo)
    {
        $categories = $categorieRepo->findAll();

        return $this->render('header.html.twig',[
            'categories' => $categories,
        ]);
    }


    public function footerAction(Request $request, ContactInfoRepository $repContact, CategorieRepository $categorieRepo)
    {
        $id= 1;
        $contactInfo = $repContact->find($id);

        $categories = $categorieRepo->findAll();
        return $this->render('footer.html.twig',[
            'contactInfo' => $contactInfo,
            'categories' => $categories,
        ]);
    }
}
