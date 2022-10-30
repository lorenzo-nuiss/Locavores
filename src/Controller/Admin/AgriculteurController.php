<?php

namespace App\Controller\Admin;

use App\Entity\Agriculteur;
use App\Form\Admin\AgriculteurType;
use Symfony\Component\Mime\Address;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\AgriculteurRepository;
use App\Repository\ContactInfoRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

/**
 * @Route("/admin/producteur")
 */
class AgriculteurController extends AbstractController
{

    /**
     * @Route("/", name="allAgri.admin")
     */
    public function indexAgriculteurV(AgriculteurRepository $agriculteurRepository)
    {

        $agriculteurs = $agriculteurRepository->findBy(
            ['etat' => 'valide']
        );
        $agri_att = $agriculteurRepository->findBy(
            ['etat' => 'attente']
        );
        @$nb_agri_att = count($agri_att);

        return $this->render('admin/agriculteur/agriculteurAll.html.twig', [
            'agriculteurs' => $agriculteurs, 
            'nb_att' => $nb_agri_att,
        ]);
    }


    /**
     * @Route("/en-attente", name="attAgri.admin")
     */
    public function indexAriculteurA(AgriculteurRepository $agriculteurRepository)
    {
        $agri_att = $agriculteurRepository->findBy(
            ['etat' => 'attente']
        );

        return $this->render('admin/agriculteur/agriculteurAttente.html.twig', [
            'agriculteurs' => $agri_att,
        ]);
    }


    // affiche les agriculteurs dans l'etat 'désactivé'
    /**
     * @Route("/historique", name="unnabledAgri.admin")
     */
    public function unnabledAgri(AgriculteurRepository $agriculteurRepository)
    {
        $agri_delete = $agriculteurRepository->findBy(
            ['etat' => 'desactive']
        );

        return $this->render('admin/agriculteur/agriculteurAttente.html.twig', [
            'agriculteurs' => $agri_delete,
        ]);
    }



    /**
     * @Route("/ajout", name="addAgri.admin")
     */
    public function new_Agriculteur(Request $request, CategorieRepository $categorie, UserPasswordHasherInterface $encoder)
    {
        $agriculteur = new Agriculteur;
        $form = $this->createForm(AgriculteurType::class, $agriculteur, array("ajouter" => true));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->hashPassword($agriculteur, $agriculteur->getPassword());
            $agriculteur->setPassword($hash);
            $agriculteur->setEtat('valide');
            $cnx = $this->getDoctrine()->getManager();
            $cnx->persist($agriculteur);
            $cnx->flush();

            $this->addFlash("success", "Le producteur a bien été ajouter");
            return $this->redirectToRoute('allAgri.admin');
        }

        return $this->render('admin/agriculteur/agriNew.html.twig', [
            'form' => $form->createView(),
            'agriculteur' => $agriculteur,
            'categorie' => $categorie
        ]);
    }

    /**
     * @Route("/{id}", name="showAgri.admin")
     */
    public function show(Agriculteur $agriculteur): Response
    {
        return $this->render('admin/agriculteur/adminShow.html.twig', [
            'agriculteur' => $agriculteur,
        ]);
    }

    /**
     * @Route("/modification/{id}", name="editAgri.admin")
     */
    public function editAgriculteur_Admin(Request $request, AgriculteurRepository $repAgri, $id, MailerInterface $mailer)
    {
        $agriculteur = $repAgri->find($id);
        $form = $this->createForm(AgriculteurType::class, $agriculteur, array("modifier" => true));
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $cnx = $this->getDoctrine()->getManager();
            $cnx->persist($agriculteur);
            $cnx->flush();

            $email = (new TemplatedEmail())
            ->from(new Address('service.locavor@gmail.com', 'Profil Locavor'))
            ->to($agriculteur->getEmail())
            ->subject('Profil mis a jour avec succès')
            ->htmlTemplate(
    'email/update_email.html.twig')
            ->context([
                'username' => $agriculteur->getNom(),
                'nom_domaine' => $agriculteur->getNomDomaine(),
                'date' => new \DateTime,
            ]);  
    // il faut rajouter un lien dans la page twig du mail pour que l utilisateur puisse se rendre directement sur son espace 
    $mailer->send($email);
            $this->addFlash("success", "l'agriculteur a bien été modifié");
            return $this->redirectToRoute('allAgri.admin');
        }
        return $this->render('agriculteur/agriEdit.html.twig', [
            'form' => $form->createView(),
            'agriculteur' => $agriculteur,
        ]);
    }

    /**
     * @Route("/suppression/{id}", name="deleteAgri.admin")
     */
    public function deleteAgri_admin(Request $request, AgriculteurRepository $repAgri, $id)
    {
        $agriculteur = $repAgri->find($id);
        $agriculteur->setEtat('desactive');
        // suppression de toutes les images de l agriculteur pour lleger la BDD
        $images = $agriculteur->getImages();
        $cnx = $this->getDoctrine()->getManager();
        if ($images) {
            foreach ($images as $image) {
                $cnx->remove($image);

                $nom = $this->getParameter("ImagesProduits") . '/' . $image->getNom();
                if (file_exists($nom)) {
                    unlink($nom);
                }
            }
        }  
        $cnx->persist($agriculteur);
        $cnx->flush();

        $this->addFlash("success", "le producteur a bien été supprmié");
        return $this->redirectToRoute('allAgri.admin');
    }


    /**
     * @Route("/modification-etat/{id<\d+>}", name="updateEtat")
     */
    public function updateEtat(AgriculteurRepository $repAgri, $id)
    {
        $agri = $repAgri->find($id);
        $agri->setEtat('valide');
        $nom = $agri->getNom();
        $cnx = $this->getDoctrine()->getManager();
        $cnx->persist($agri);
        $cnx->flush();

        $this->addFlash("success", $nom." a bien été ajouté");
        return $this->redirectToRoute('attAgri.admin');
    }

}