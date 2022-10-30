<?php

namespace App\Controller\Agriculteur;

use App\Entity\Images;
use App\Repository\CategorieRepository;
use App\Form\Agriculteur\UpdatePassFormType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use App\Form\Agriculteur\UpdateProfilFormType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

/**
 * @Route("/agriculteur", name="agriculteur_")
 */
class AgriculteurController extends AbstractController
{

    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render(
            'agriculteur/index.html.twig'
        );
    }

    // ------ Modifcation des informations public de l agriculteur -------
    /**
     * @Route("/modification_profil", name="editProfil")
     */
    public function editProfile(Request $request)
    {

        $agri = $this->getUser();
        $form = $this->createForm(UpdateProfilFormType::class, $agri);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cnx = $this->getDoctrine()->getManager();
            $cnx->persist($agri);
            $cnx->flush();

            $this->addFlash("success", "Profil mis a jour");
            return $this->redirectToRoute("agriculteur_index");
        }

        return $this->render('agriculteur/profil/profilEdit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // --------- Modification du mot de passe --------------
    /**
     * @Route("/modification_mot-de-passe", name="editmdp")
     */
    public function editPerso(Request $request, UserPasswordHasherInterface $hash)
    {

        $agri = $this->getUser();
        $mdpDtb = $this->getUser()->getPassword();

        $form = $this->createForm(UpdatePassFormType::class, $agri);
        $form->handleRequest($request);

        $inputoldmdp = $form['oldpassword']->getData();

        if ($form->isSubmitted() && $form->isValid()) {
            if (password_verify($inputoldmdp, $mdpDtb)) {

                $agri->setPassword(
                    $hash->hashPassword(
                        $agri,
                        $form->get('password')->getData()
                    )
                );
                $cnx = $this->getDoctrine()->getManager();
                $cnx->persist($agri);
                $cnx->flush();

                $this->addFlash("success", "Votre mot de passe a bien était modifié");
                return $this->redirectToRoute('agriculteur_index');
            } else {
                $this->addFlash("error", "Vous n'avez pas rentrer le bon mot de passe");
                return $this->redirectToRoute('agriculteur_index');
            }
        }
        return $this->render('agriculteur/profil/persoEdit.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    //----------- La page profil de l agriculteur -- + mofification de l image de profil----------

    /**
     * @Route("/votre-magasin", name="profil")
     */
    public function profil(Request $request, CategorieRepository $categorieR)
    {
        $categorie = $categorieR->findAll();
        $agri = $this->getUser();

        $form = $this->createForm(UpdateProfilFormType::class, $agri, array("photo" => true));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $files = $form->get('photo')->getData();
            if (empty($files)) {
                $this->addFlash("error", "Une erreur a été detecté");
                return $this->redirectToRoute("agriculteur_index");
            }
            $photo = date("YmdHis") . "-" . uniqid() . "-" . $files->getClientOriginalName();
            $cnx = $this->getDoctrine()->getManager();
            $agri->setPhoto($photo);
            // on va sauvegarder la piece jointe dans un dossier upload
            $files->move($this->getParameter('ImagesCategories'), $photo);

            $cnx->persist($agri);
            $cnx->flush();
            $this->addFlash("success", "Votre photo à bien été modifié");
        }
        return $this->render('agriculteur/profil/profilAgri.html.twig', [
            'form' => $form->createView(),
            'categorie' => $categorie
        ]);
    }

    // Rentrer dans l'etat disponible
    /**
     * @Route("/disponible", name="disponible")
     */
    public function disponible()
    {

        $agri = $this->getUser();
        $agri->setDisponible($agri->getDisponible() ? false : true);
        $cnx = $this->getDoctrine()->getManager();
        $cnx->persist($agri);
        $cnx->flush();
        return new Response("true");
    }



    /**
     * @Route("/supprimer-profil", name="deleteProfil")
     */
    public function deleteProfile(Request $request)
    {
        $agri = $this->getUser();
            $agri->setEtat('desactive');
            $cnx = $this->getDoctrine()->getManager();
            $images = $agri->getImages();
            if ($images) {
                foreach ($images as $image) {
                    $cnx->remove($image);
                    $nom = $this->getParameter("ImagesProduits") . '/' . $image->getNom();
                    if (file_exists($nom)) {
                        unlink($nom);
                    }
                }
            }  

// a tester, il faut aussi supprimer la photo de la table agri
            $file = $agri->getPhoto();
            if($file){
                $agri->setPhoto(NULL);
                $nom = $this->getParameter("ImagesCategories") . '/' . $file;
                if (file_exists($nom)) {
                    unlink($nom);
                }
            }

            $cnx->persist($agri);
            $cnx->flush();

            return new Response("true".dd($agri));
            // return $this->redirectToRoute('app_logout');
        
    }
}
