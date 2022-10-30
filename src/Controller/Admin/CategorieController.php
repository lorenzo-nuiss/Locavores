<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use App\Form\Admin\CategorieType;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\Null_;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * @Route("/admin/categorie")
 */
class CategorieController extends AbstractController
{


    /**
     * @Route("/ajout_categorie", name="addCategorie.admin")
     */
    public function addCategorie(Request $request)
    {
        $categorie = new Categorie;
        $form = $this->createForm(CategorieType::class, $categorie, array("ajouter" => true));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $files = $form->get('image')->getData();
            $img = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME); //equivaut a $_FILES['photo']['name']
            $extension = $files->guessExtension();
            if ($extension == 'jpeg' or $extension == 'png' or  $extension == 'jpg') {
                $photo = date("YmdHis") . "-" . uniqid() . "-" . $files->getClientOriginalName();
                $cnx = $this->getDoctrine()->getManager(); //connexion avec la doctrine
                $categorie->setImage($photo);
                // on va sauvegarder la piece jointe dans un dossier upload
                $files->move($this->getParameter('ImagesCategories'), $photo);

                $cnx->persist($categorie);
                $cnx->flush();
                $this->addFlash("success", "la catégorie à bien été ajouté");

                return $this->redirectToRoute("showCategorie.admin");
            } else {
                return new Response($extension . ": cette extention n 'st pas valide");
            }
        }
        return $this->render('admin/categorie/addCategorie.html.twig', [
            'form' => $form->createView()
        ]);
    }



    /**
     * @Route("/", name="showCategorie.admin")
     */
    public function showCategorie(CategorieRepository $categorie)
    {
        $categories = $categorie->findAll();
        return $this->render('admin/categorie/showCategorie.html.twig', [
            'resultat' => $categories
        ]);
    }


    
    /**
     * @Route("/modifier_categorie/{id<\d+>}", name="editCategorie.admin")
     */
    public function editCategorie(Request $request, Categorie $categorie)
    {

        $form = $this->createForm(CategorieType::class, $categorie, array("modifier" => true));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $files = $form->get('image')->getData();

            // $img = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME); //equivaut a $_FILES['photo']['name']
            
            if (!empty($files)) {
                $extension = $files->guessExtension();

            if ($extension == 'jpeg' or $extension == 'png' or  $extension == 'jpg') {
                $photo = date("YmdHis") . "-" . uniqid() . "-" . $files->getClientOriginalName();

                $files->move($this->getParameter('ImagesCategories'), $photo);

                if ($categorie->getImage()) {
                    unlink($this->getParameter("ImagesCategories") . '/' . $categorie->getImage());
                }
                $categorie->setImage($photo);
            }
        }
        else{
        }
        $cnx = $this->getDoctrine()->getManager();
                $cnx->persist($categorie);
                $cnx->flush();

                return $this->redirectToRoute("showCategorie.admin");
                }

        return $this->render('admin/categorie/editCategorie.html.twig', [
            'categorie' => $categorie,
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/supprmier/{id<\d+>}", name="deleteCategorie.admin")
     */

    public function deleteCategorie(Categorie $categorie, EntityManagerInterface $manager)
    {

        if ($categorie->getImage()) {
            unlink($this->getParameter("ImagesCategories") . "/" . $categorie->getImage()); 
        }
        $nomCat = $categorie->getNom();
        $manager->remove($categorie);
        $manager->flush();

        $this->addFlash("success", "La categorie : $nomCat a bien été supprimé");
        return $this->redirectToRoute("showCategorie.admin");
    }
}
